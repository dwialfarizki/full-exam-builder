<?php

namespace App\Http\Controllers;

use App\Models\Latihan;
use App\Models\Soal;
use Illuminate\Http\Request;

class LatihanController extends Controller
{
    // UPDATE: Menjadikan fungsi index dinamis dengan pencarian dan pagination
    public function index(Request $request)
    {
        // 1. Ambil query pencarian jika ada input dari form filter nama latihan
        $search = $request->input('search');

        // 2. Query data latihan dari database
        $exams = Latihan::query()
            // Menghitung jumlah relasi soal otomatis (akan menghasilkan properti soals_count di objek $exam)
            ->withCount('soals')
            // Jika ada input search, filter berdasarkan nama latihan
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', '%' . $search . '%');
            })
            // Urutkan dari data latihan yang paling baru dibuat
            ->latest()
            // Batasi 10 data per halaman sesuai dengan struktur tampilan blade dashboard Anda
            ->paginate(10)
            // Tetap membawa parameter search saat berpindah halaman di pagination links
            ->withQueryString();

        // 3. Mengirimkan data $exams ke file blade index
        return view('dashboard', compact('exams'));
    }

    public function create()
    {
        return view('latihan.create');
    }

    // UPDATE: Mengisi logika penyimpanan data form create latihan ke database
    public function store(Request $request)
    {
        // 1. Validasi input form - Diperketat pada bagian dropdown agar sesuai dengan opsi kustom baru
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'umpan_balik' => 'required|in:langsung,akhir_tes,tidak_tampil', // Diperbarui dari nullable|string
            'tampilkan_nilai' => 'required|in:skor_saja,skor_dan_detail,sembunyikan', // Diperbarui dari nullable|string
            'pertanyaan_per_halaman' => 'required|string',
            'jenis_pemilihan' => 'required|in:berurutan,acak_semua,acak_sebagian', // Diperbarui dari nullable|string
            'acak_jawaban' => 'required|in:ya,tidak',
            'tampilkan_kategori' => 'required|in:ya,tidak',
            'sembunyikan_judul' => 'required|in:ya,tidak',
            'maks_percobaan' => 'nullable|integer',
            'start_deadline' => 'nullable|date',
            'end_deadline' => 'nullable|date',
            'passing_grade' => 'nullable|integer|min:0|max:100',
            'teks_akhir' => 'nullable|string',
        ]);

        // 2. Memetakan nilai data input boolean/checkbox toggles
        $validatedData['negative_score'] = $request->has('negative_score');
        $validatedData['save_correct'] = $request->has('save_correct');
        $validatedData['check_answer'] = $request->has('check_answer');
        $validatedData['time_control'] = $request->has('time_control');
        $validatedData['perbarui_jalur'] = $request->has('perbarui_jalur');

        if (!$request->has('enable_start')) {
            $validatedData['start_deadline'] = null;
        }
        if (!$request->has('enable_end')) {
            $validatedData['end_deadline'] = null;
        }

        // 3. Simpan baris data ke database (Aman karena Model menggunakan $guarded = ['id'])
        $latihan = Latihan::create($validatedData);

        // 4. Redirect ke route exam dengan menyertakan ID latihan yang baru saja dibuat
        return redirect()->route('latihan.exam', $latihan->id)
                         ->with('success', 'Latihan berhasil dibuat, silakan isi pertanyaan.');
    }

    // UPDATE: Fungsi memanggil file exam.blade.php dengan membawa data relasi soal secara dinamis
    public function exam($id)
    {
        // Mengambil data latihan beserta kumpulan soal di dalamnya
        $latihan = Latihan::with('soals')->findOrFail($id);

        // Kalkulasi info box banner atas secara dinamis
        $totalSoal = $latihan->soals->count();
        $totalNilai = $latihan->soals->sum('nilai');

        return view('latihan.exam', compact('latihan', 'totalSoal', 'totalNilai'));
    }

    // UPDATE: Fungsi memanggil file create_pilihan_ganda dengan membawa context ID Latihan
    public function createPilihanGanda($latihan_id)
    {
        $latihan = Latihan::findOrFail($latihan_id);
        return view('latihan.create_pilihan_ganda', compact('latihan'));
    }

    // DISESUAIKAN: Menyimpan soal pilihan ganda dengan mengambil nilai otomatis dari opsi yang benar (Figma Style)
    public function storePilihanGanda(Request $request, $latihan_id)
    {
        $latihan = Latihan::findOrFail($latihan_id);

        // Menghapus aturan validasi 'nilai' => 'required' karena nilainya sekarang dicari dinamis dari baris tabel figma
        $request->validate([
            'pertanyaan' => 'required|string',
            'kategori' => 'nullable|string|max:100',
            'tingkat_kesulitan' => 'required|integer|min:1',
            'opsi_a' => 'required|string',
            'opsi_b' => 'required|string',
            'opsi_c' => 'required|string',
            'opsi_d' => 'required|string',
            'jawaban_benar' => 'required|in:A,B,C,D',
        ]);

        // LOGIKA BARU: Mengambil huruf pilihan yang dicentang benar (A, B, C, atau D) dan diubah menjadi huruf kecil (a, b, c, atau d)
        $hurufOpsiBenar = strtolower($request->jawaban_benar);

        // Membaca secara dinamis input 'nilai_a', 'nilai_b', 'nilai_c', atau 'nilai_d' dari form. Jika tidak diisi, defaultnya 1.
        $bobotNilaiSoal = $request->input('nilai_' . $hurufOpsiBenar, 1);

        // Menyimpan record soal ke dalam database terikat dengan latihan_id
        Soal::create([
            'latihan_id' => $latihan->id,
            'pertanyaan' => $request->pertanyaan,
            'nilai' => $bobotNilaiSoal, // Menyimpan bobot nilai yang berhasil didapatkan secara dinamis
            'kategori' => $request->kategori,
            'tingkat_kesulitan' => $request->tingkat_kesulitan,
            'opsi_a' => $request->opsi_a,
            'opsi_b' => $request->opsi_b,
            'opsi_c' => $request->opsi_c,
            'opsi_d' => $request->opsi_d,
            'jawaban_benar' => $request->jawaban_benar,
        ]);

        // Setelah sukses menyimpan, guru diarahkan kembali ke dashboard exam latihan tersebut
        return redirect()->route('latihan.exam', $latihan->id)
                         ->with('success', 'Soal pilihan ganda berhasil ditambahkan!');
    }

    // REKAYASA BARU (DELETE): Menghapus baris soal dari database
    public function destroySoal($id)
    {
        $soal = Soal::findOrFail($id);
        $soal->delete();

        return redirect()->back()->with('success', 'Soal berhasil dihapus.');
    }

    // REKAYASA BARU (DELETE): Menghapus seluruh paket latihan dari database beserta soal di dalamnya
    public function destroyLatihan($id)
    {
        $latihan = Latihan::findOrFail($id);

        // Menghapus semua soal yang terikat ke latihan ini terlebih dahulu agar aman
        $latihan->soals()->delete();

        // Menghapus data utama paket latihan
        $latihan->delete();

        return redirect()->route('dashboard')->with('success', 'Paket latihan berhasil dihapus.');
    }

    // ==========================================
    // TAMBAHAN BARU: FITUR EDIT & UPDATE SOAL
    // ==========================================

    // Menampilkan halaman form edit untuk soal tertentu
    public function editSoal($id)
    {
        $soal = Soal::findOrFail($id);
        $latihan = Latihan::findOrFail($soal->latihan_id);

        return view('latihan.edit_pilihan_ganda', compact('soal', 'latihan'));
    }

    // Memproses update data perubahan soal ke database
    public function updateSoal(Request $request, $id)
    {
        $soal = Soal::findOrFail($id);

        $request->validate([
            'pertanyaan' => 'required|string',
            'kategori' => 'nullable|string|max:100',
            'tingkat_kesulitan' => 'required|integer|min:1',
            'opsi_a' => 'required|string',
            'opsi_b' => 'required|string',
            'opsi_c' => 'required|string',
            'opsi_d' => 'required|string',
            'jawaban_benar' => 'required|in:A,B,C,D',
        ]);

        $hurufOpsiBenar = strtolower($request->jawaban_benar);
        $bobotNilaiSoal = $request->input('nilai_' . $hurufOpsiBenar, 1);

        $soal->update([
            'pertanyaan' => $request->pertanyaan,
            'nilai' => $bobotNilaiSoal,
            'kategori' => $request->kategori,
            'tingkat_kesulitan' => $request->tingkat_kesulitan,
            'opsi_a' => $request->opsi_a,
            'opsi_b' => $request->opsi_b,
            'opsi_c' => $request->opsi_c,
            'opsi_d' => $request->opsi_d,
            'jawaban_benar' => $request->jawaban_benar,
        ]);

        return redirect()->route('latihan.exam', $soal->latihan_id)
                         ->with('success', 'Soal berhasil diperbarui!');
    }
}
