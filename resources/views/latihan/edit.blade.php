<x-app-layout>
    <div class="flex min-h-screen bg-gray-50 text-gray-700 font-sans">

        <aside
            class="w-64 bg-white border-r border-gray-200 flex flex-col hidden md:flex sticky top-0 h-screen select-none font-sans text-sm">

            <div class="h-14 flex items-center px-6 border-b border-gray-200/80 space-x-3 text-gray-600">
                <x-lucide-menu class="w-4 h-4 text-gray-500" />
                <span class="font-normal text-gray-700">Menu</span>
            </div>

            <div class="flex-1 py-4 overflow-y-auto space-y-1">

                <div x-data="{ open: true }">
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-6 py-3 text-gray-700 hover:bg-gray-50/80 transition-colors font-normal text-left">
                        <div class="flex items-center space-x-3">
                            <x-lucide-book-open class="w-4 h-4 text-blue-600" />
                            <span>Mata Kuliah</span>
                        </div>
                        <x-lucide-chevron-down class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200"
                            ::class="{ 'rotate-180': open }" />
                    </button>

                    <div x-show="open" class="border-l border-gray-200 ml-8 my-1 space-y-0.5">
                        <div class="relative -ml-[1px] border-l-2 border-blue-600 bg-blue-50/40">
                            <a href="{{ route('latihan.index') }}" class="block pl-5 py-2 text-blue-600 font-medium">
                                Mata Kuliah Saya
                            </a>
                        </div>
                        <div class="relative -ml-[1px] border-l border-transparent">
                            <a href="#"
                                class="block pl-5 py-2 text-gray-500 hover:text-gray-900 transition-colors">
                                Katalog
                            </a>
                        </div>
                    </div>
                </div>

                <div x-data="{ open: true }">
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-6 py-3 text-gray-700 hover:bg-gray-50/80 transition-colors font-normal text-left">
                        <div class="flex items-center space-x-3">
                            <x-lucide-database class="w-4 h-4 text-gray-500" />
                            <span>Pengelolaan</span>
                        </div>
                        <x-lucide-chevron-down class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200"
                            ::class="{ 'rotate-180': open }" />
                    </button>

                    <div x-show="open" class="border-l border-gray-200 ml-8 my-1 space-y-0.5">
                        <div class="relative -ml-[1px] border-l border-transparent">
                            <a href="#"
                                class="block pl-5 py-2 text-gray-500 hover:text-gray-900 transition-colors">
                                Buat Mata Kuliah
                            </a>
                        </div>
                        <div class="relative -ml-[1px] border-l border-transparent">
                            <a href="#"
                                class="block pl-5 py-2 text-gray-500 hover:text-gray-900 transition-colors">
                                Kelola Sesi
                            </a>
                        </div>
                    </div>
                </div>

                <div x-data="{ open: true }">
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-6 py-3 text-gray-700 hover:bg-gray-50/80 transition-colors font-normal text-left">
                        <div class="flex items-center space-x-3">
                            <x-lucide-pie-chart class="w-4 h-4 text-gray-500" />
                            <span>Aktivitas</span>
                        </div>
                        <x-lucide-chevron-down class="w-3.5 h-3.5 text-gray-400 transition-transform duration-200"
                            ::class="{ 'rotate-180': open }" />
                    </button>

                    <div x-show="open" class="border-l border-gray-200 ml-8 my-1 space-y-0.5">
                        <div class="relative -ml-[1px] border-l border-transparent">
                            <a href="#"
                                class="block pl-5 py-2 text-gray-500 hover:text-gray-900 transition-colors">
                                Terakhir Dikunjungi
                            </a>
                        </div>
                        <div class="relative -ml-[1px] border-l border-transparent">
                            <a href="#"
                                class="block pl-5 py-2 text-gray-500 hover:text-gray-900 transition-colors">
                                Riwayat
                            </a>
                        </div>
                        <div class="relative -ml-[1px] border-l border-transparent">
                            <a href="#"
                                class="block pl-5 py-2 text-gray-500 hover:text-gray-900 transition-colors">
                                Laporan Waktu
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </aside>

        <div class="flex-1 flex flex-col min-w-0">
            <header class="px-10 pt-5 pb-4">
                <div class="flex items-center gap-4 text-[13px] text-[#8C94A6]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-home w-3.5 h-3.5 text-gray-400">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    <span>Pengelolaan Mata Kuliah</span>
                    <span>&rsaquo;</span>
                    <span>Katalog Mata Kuliah</span>
                    <span>&rsaquo;</span>
                    <span>Mata Kuliah</span>
                    <span>&rsaquo;</span>
                    <span class="text-blue-600 font-medium">Edit Latihan</span>
                </div>
            </header>

            <main class="bg-white rounded-2xl border border-gray-200 shadow-sm mx-8 mb-6 p-8">
                <div class="mb-6">
                    <h1 class="text-xl font-bold text-gray-900">Edit Latihan</h1>
                </div>

                <form action="{{ route('latihan.update', $latihan->id) }}" method="POST" class="space-y-6 pb-12"
                    x-data="{
                        showStartDeadline: {{ old('enable_start', $latihan->start_deadline ? 'true' : 'false') }},
                        showEndDeadline: {{ old('enable_end', $latihan->end_deadline ? 'true' : 'false') }}
                    }">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="text-xs font-semibold text-gray-700 block mb-2">
                            Nama Latihan <span class="text-red-500">*</span>
                        </label>
                        <div class="flex items-center space-x-2">
                            <input type="text" name="nama" value="{{ old('nama', $latihan->nama) }}" placeholder="Masukkan judul" required
                                class="flex-1 border-gray-200 rounded-lg text-sm py-2.5 px-4 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400">
                            <button type="button"
                                class="p-2.5 bg-sky-100 hover:bg-sky-200 text-sky-600 rounded-lg transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-sliders w-5 h-5">
                                    <line x1="4" x2="4" y1="21" y2="14" />
                                    <line x1="4" x2="4" y1="10" y2="3" />
                                    <line x1="12" x2="12" y1="21" y2="12" />
                                    <line x1="12" x2="12" y1="8" y2="3" />
                                    <line x1="20" x2="20" y1="21" y2="16" />
                                    <line x1="20" x2="20" y1="12" y2="3" />
                                    <line x1="2" x2="6" y1="14" y2="14" />
                                    <line x1="10" x2="14" y1="8" y2="8" />
                                    <line x1="18" x2="22" y1="16" y2="16" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="relative flex py-2 items-center">
                        <span class="flex-shrink pr-4 text-xs font-medium text-gray-400">Pengaturan Lanjutan</span>
                        <div class="flex-grow border-t border-gray-200"></div>
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-700 block mb-2">Deskripsi Latihan</label>
                        <div class="border border-gray-200 rounded-lg overflow-hidden bg-white">
                            <div
                                class="bg-gray-50/50 border-b border-gray-200 p-2 flex items-center justify-between text-gray-400 text-xs">
                                <div class="flex items-center space-x-4 pl-1">
                                    <button type="button" class="hover:text-gray-700 font-bold">B</button>
                                    <button type="button" class="hover:text-gray-700 italic font-serif text-sm">I</button>
                                    <button type="button" class="hover:text-gray-700 underline">U</button>
                                    <span class="text-gray-200">|</span>
                                    <button type="button" class="hover:text-gray-700 font-semibold text-[10px]">H1</button>
                                    <button type="button" class="hover:text-gray-700 font-semibold text-[10px]">H2</button>
                                    <button type="button" class="hover:text-gray-700 font-semibold text-[10px]">H3</button>
                                    <span class="text-gray-200">|</span>
                                    <button type="button" class="hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-list w-3.5 h-3.5">
                                            <line x1="8" x2="21" y1="6" y2="6" />
                                            <line x1="8" x2="21" y1="12" y2="12" />
                                            <line x1="8" x2="21" y1="18" y2="18" />
                                            <line x1="3" x2="3.01" y1="6" y2="6" />
                                            <line x1="3" x2="3.01" y1="12" y2="12" />
                                            <line x1="3" x2="3.01" y1="18" y2="18" />
                                        </svg>
                                    </button>
                                    <button type="button" class="hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-align-left w-3.5 h-3.5">
                                            <line x1="21" x2="3" y1="6" y2="6" />
                                            <line x1="15" x2="3" y1="12" y2="12" />
                                            <line x1="17" x2="3" y1="18" y2="18" />
                                        </svg>
                                    </button>
                                    <span class="text-gray-200">|</span>
                                    <button type="button" class="hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-link w-3.5 h-3.5">
                                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                                        </svg>
                                    </button>
                                    <button type="button" class="hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-image w-3.5 h-3.5">
                                            <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
                                            <circle cx="9" cy="9" r="2" />
                                            <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" />
                                        </svg>
                                    </button>
                                    <button type="button" class="hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-table w-3.5 h-3.5">
                                            <path d="M12 3v18" />
                                            <rect width="18" height="18" x="3" y="3" rx="2" />
                                            <path d="M3 9h18" />
                                            <path d="M3 15h18" />
                                        </svg>
                                    </button>
                                </div>
                                <button type="button" class="hover:text-gray-700 pr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-maximize w-3.5 h-3.5">
                                        <path d="M8 3H5a2 2 0 0 0-2 2v3" />
                                        <path d="M21 8V5a2 2 0 0 0-2-2h-3" />
                                        <path d="M3 16v3a2 2 0 0 0 2 2h3" />
                                        <path d="M16 21h3a2 2 0 0 0 2-2v-3" />
                                    </svg>
                                </button>
                            </div>
                            <textarea name="keterangan" rows="8" class="w-full border-none focus:ring-0 text-sm p-4 placeholder-gray-400"
                                placeholder="Type here...">{{ old('keterangan', $latihan->keterangan) }}</textarea>
                        </div>
                        <div class="text-xs text-gray-400 mt-1.5">0 / 5000 characters</div>
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-700 block mb-2">Umpan Balik</label>
                        <select name="umpan_balik" required
                            class="w-full border-gray-200 rounded-lg text-sm py-2.5 px-4 bg-white text-gray-700 focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                            <option value="langsung" {{ old('umpan_balik', $latihan->umpan_balik) == 'langsung' ? 'selected' : '' }}>Tampilkan langsung setelah pertanyaan dijawab</option>
                            <option value="akhir_tes" {{ old('umpan_balik', $latihan->umpan_balik) == 'akhir_tes' ? 'selected' : '' }}>Tampilkan di akhir pengerjaan tes saja</option>
                            <option value="tidak_tampil" {{ old('umpan_balik', $latihan->umpan_balik) == 'tidak_tampil' ? 'selected' : '' }}>Jangan tampilkan umpan balik kepada peserta</option>
                        </select>
                        <p class="text-[11px] text-gray-400 mt-1.5 leading-relaxed">
                            Bagaimana sebaiknya umpan balik/komentar untuk setiap soal ditampilkan? Opsi ini menentukan cara penampilannya kepada peserta saat mengerjakan tes. Kami menyarankan Anda untuk mencoba berbagai opsi dengan mengedit pengaturan tes sebelum peserta mengerjakannya.
                        </p>
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-700 block mb-2">Tampilkan Nilai Kepada Siswa</label>
                        <select name="tampilkan_nilai" required
                            class="w-full border-gray-200 rounded-lg text-sm py-2.5 px-4 bg-white text-gray-700 focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                            <option value="skor_saja" {{ old('tampilkan_nilai', $latihan->tampilkan_nilai) == 'skor_saja' ? 'selected' : '' }}>Tampilkan skor akhir saja</option>
                            <option value="skor_dan_detail" {{ old('tampilkan_nilai', $latihan->tampilkan_nilai) == 'skor_dan_detail' ? 'selected' : '' }}>Tampilkan skor akhir beserta detail lembar jawaban</option>
                            <option value="sembunyikan" {{ old('tampilkan_nilai', $latihan->tampilkan_nilai) == 'sembunyikan' ? 'selected' : '' }}>Sembunyikan nilai dari siswa (Hanya Pengajar)</option>
                        </select>
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-700 block mb-2">Pertanyaan per Halaman</label>
                        <div class="flex items-center space-x-6 text-xs text-gray-700 pt-1">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="pertanyaan_per_halaman" value="khusus" {{ old('pertanyaan_per_halaman', $latihan->pertanyaan_per_halaman) == 'khusus' ? 'checked' : '' }}
                                    class="w-3.5 h-3.5 border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span>Pada Halaman Khusus</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="pertanyaan_per_halaman" value="sequential" {{ old('pertanyaan_per_halaman', $latihan->pertanyaan_per_halaman) == 'sequential' || !old('pertanyaan_per_halaman', $latihan->pertanyaan_per_halaman) ? 'checked' : '' }}
                                    class="w-3.5 h-3.5 border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span>Satu Pertanyaan per Halaman (Sequential)</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-700 block mb-2">Jenis Pemilihan Soal</label>
                        <select name="jenis_pemilihan" required
                            class="w-full border-gray-200 rounded-lg text-sm py-2.5 px-4 bg-white text-gray-700 focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                            <option value="berurutan" {{ old('jenis_pemilihan', $latihan->jenis_pemilihan) == 'berurutan' ? 'selected' : '' }}>Gunakan semua soal secara berurutan</option>
                            <option value="acak_semua" {{ old('jenis_pemilihan', $latihan->jenis_pemilihan) == 'acak_semua' ? 'selected' : '' }}>Acak urutan semua soal yang tersedia</option>
                            <option value="acak_sebagian" {{ old('jenis_pemilihan', $latihan->jenis_pemilihan) == 'acak_sebagian' ? 'selected' : '' }}>Pilih sebagian soal secara acak dari bank soal</option>
                        </select>
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-700 block mb-2">Acak Jawaban</label>
                        <div class="flex items-center space-x-6 text-xs text-gray-700 pt-1">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="acak_jawaban" value="ya" {{ old('acak_jawaban', $latihan->acak_jawaban) == 'ya' ? 'checked' : '' }}
                                    class="w-3.5 h-3.5 border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span>Ya</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="acak_jawaban" value="tidak" {{ old('acak_jawaban', $latihan->acak_jawaban) == 'tidak' || !old('acak_jawaban', $latihan->acak_jawaban) ? 'checked' : '' }}
                                    class="w-3.5 h-3.5 border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span>Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-700 block mb-2">Tampilkan Kategori Pertanyaan</label>
                        <div class="flex items-center space-x-6 text-xs text-gray-700 pt-1">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="tampilkan_kategori" value="ya" {{ old('tampilkan_kategori', $latihan->tampilkan_kategori) == 'ya' ? 'checked' : '' }}
                                    class="w-3.5 h-3.5 border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span>Ya</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="tampilkan_kategori" value="tidak" {{ old('tampilkan_kategori', $latihan->tampilkan_kategori) == 'tidak' || !old('tampilkan_kategori', $latihan->tampilkan_kategori) ? 'checked' : '' }}
                                    class="w-3.5 h-3.5 border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span>Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-700 block mb-2">Sembunyikan Judul Pertanyaan</label>
                        <div class="flex items-center space-x-6 text-xs text-gray-700 pt-1">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="sembunyikan_judul" value="ya" {{ old('sembunyikan_judul', $latihan->sembunyikan_judul) == 'ya' ? 'checked' : '' }}
                                    class="w-3.5 h-3.5 border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span>Ya</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="sembunyikan_judul" value="tidak" {{ old('sembunyikan_judul', $latihan->sembunyikan_judul) == 'tidak' || !old('sembunyikan_judul', $latihan->sembunyikan_judul) ? 'checked' : '' }}
                                    class="w-3.5 h-3.5 border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span>Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-700 block mb-2">Jumlah Maksimum Percobaan</label>
                        <input type="number" name="maks_percobaan" value="{{ old('maks_percobaan', $latihan->maks_percobaan) }}" placeholder="Masukkan jumlah maksimum percobaan" min="1"
                            class="w-full border-gray-200 rounded-lg text-sm py-2.5 px-4 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400">
                    </div>

                    <div class="space-y-3 pt-2 text-xs text-gray-700">
                        <div>
                            <label class="flex items-center space-x-3 cursor-pointer">
                                <input type="checkbox" name="enable_start" x-model="showStartDeadline"
                                    class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span>Aktifkan waktu mulai</span>
                            </label>
                            <div x-show="showStartDeadline" x-transition class="mt-2 pl-7">
                                <input type="datetime-local" name="start_deadline" value="{{ old('start_deadline', $latihan->start_deadline ? \Carbon\Carbon::parse($latihan->start_deadline)->format('Y-m-d\TH:i') : '') }}"
                                    class="w-full max-w-xs border-gray-200 rounded-lg text-xs py-2 px-3 focus:ring-blue-500">
                            </div>
                        </div>

                        <div>
                            <label class="flex items-center space-x-3 cursor-pointer">
                                <input type="checkbox" name="enable_end" x-model="showEndDeadline"
                                    class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span>Aktifkan waktu berakhir</span>
                            </label>
                            <div x-show="showEndDeadline" x-transition class="mt-2 pl-7">
                                <input type="datetime-local" name="end_deadline" value="{{ old('end_deadline', $latihan->end_deadline ? \Carbon\Carbon::parse($latihan->end_deadline)->format('Y-m-d\TH:i') : '') }}"
                                    class="w-full max-w-xs border-gray-200 rounded-lg text-xs py-2 px-3 focus:ring-blue-500">
                            </div>
                        </div>

                        <label class="flex items-center space-x-3 cursor-pointer">
                            <input type="checkbox" name="negative_score" value="1" {{ old('negative_score', $latihan->negative_score) ? 'checked' : '' }}
                                class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span>Simpan hasil negatif antar soal</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer">
                            <input type="checkbox" name="save_correct" value="1" {{ old('save_correct', $latihan->save_correct) ? 'checked' : '' }}
                                class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span>Simpan jawaban benar untuk percobaan berikutnya</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer">
                            <input type="checkbox" name="check_answer" value="1" {{ old('check_answer', $latihan->check_answer) ? 'checked' : '' }}
                                class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span>Periksa jawaban saya</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer">
                            <input type="checkbox" name="time_control" value="1" {{ old('time_control', $latihan->time_control) ? 'checked' : '' }}
                                class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span>Aktifkan kontrol waktu</span>
                        </label>
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-700 block mb-2">Persentase Lulus</label>
                        <div class="relative">
                            <input type="number" name="passing_grade" value="{{ old('passing_grade', $latihan->passing_grade) }}" placeholder="Masukkan persentase" min="0" max="100"
                                class="w-full border-gray-200 rounded-lg text-sm py-2.5 px-4 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 pr-12 placeholder-gray-400">
                            <span
                                class="absolute right-0 top-0 h-full flex items-center px-4 text-gray-400 text-sm border-l border-gray-200 bg-gray-50/30 rounded-r-lg">%</span>
                        </div>
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-700 block mb-2">Teks Tampil di Bagian Akhir Tes</label>
                        <div class="border border-gray-200 rounded-lg overflow-hidden bg-white">
                            <div
                                class="bg-gray-50/50 border-b border-gray-200 p-2 flex items-center justify-between text-gray-400 text-xs">
                                <div class="flex items-center space-x-4 pl-1">
                                    <button type="button" class="hover:text-gray-700 font-bold">B</button>
                                    <button type="button" class="hover:text-gray-700 italic font-serif text-sm">I</button>
                                    <button type="button" class="hover:text-gray-700 underline">U</button>
                                    <span class="text-gray-200">|</span>
                                    <button type="button" class="hover:text-gray-700 font-semibold text-[10px]">H1</button>
                                    <button type="button" class="hover:text-gray-700 font-semibold text-[10px]">H2</button>
                                    <button type="button" class="hover:text-gray-700 font-semibold text-[10px]">H3</button>
                                    <span class="text-gray-200">|</span>
                                    <button type="button" class="hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-list w-3.5 h-3.5">
                                            <line x1="8" x2="21" y1="6" y2="6" />
                                            <line x1="8" x2="21" y1="12" y2="12" />
                                            <line x1="8" x2="21" y1="18" y2="18" />
                                            <line x1="3" x2="3.01" y1="6" y2="6" />
                                            <line x1="3" x2="3.01" y1="12" y2="12" />
                                            <line x1="3" x2="3.01" y1="18" y2="18" />
                                        </svg>
                                    </button>
                                    <button type="button" class="hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-align-left w-3.5 h-3.5">
                                            <line x1="21" x2="3" y1="6" y2="6" />
                                            <line x1="15" x2="3" y1="12" y2="12" />
                                            <line x1="17" x2="3" y1="18" y2="18" />
                                        </svg>
                                    </button>
                                    <span class="text-gray-200">|</span>
                                    <button type="button" class="hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-link w-3.5 h-3.5">
                                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                                        </svg>
                                    </button>
                                    <button type="button" class="hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-image w-3.5 h-3.5">
                                            <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
                                            <circle cx="9" cy="9" r="2" />
                                            <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" />
                                        </svg>
                                    </button>
                                    <button type="button" class="hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-table w-3.5 h-3.5">
                                            <path d="M12 3v18" />
                                            <rect width="18" height="18" x="3" y="3" rx="2" />
                                            <path d="M3 9h18" />
                                            <path d="M3 15h18" />
                                        </svg>
                                    </button>
                                </div>
                                <button type="button" class="hover:text-gray-700 pr-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-maximize w-3.5 h-3.5">
                                        <path d="M8 3H5a2 2 0 0 0-2 2v3" />
                                        <path d="M21 8V5a2 2 0 0 0-2-2h-3" />
                                        <path d="M3 16v3a2 2 0 0 0 2 2h3" />
                                        <path d="M16 21h3a2 2 0 0 0 2-2v-3" />
                                    </svg>
                                </button>
                            </div>
                            <textarea name="teks_akhir" rows="8" class="w-full border-none focus:ring-0 text-sm p-4 placeholder-gray-400"
                                placeholder="Type here...">{{ old('teks_akhir', $latihan->teks_akhir) }}</textarea>
                        </div>
                        <div class="text-xs text-gray-400 mt-1.5">0 / 5000 characters</div>
                    </div>

                    <div>
                        <label class="flex items-center space-x-3 text-xs text-gray-700 cursor-pointer">
                            <input type="checkbox" name="perbarui_jalur" value="1" {{ old('perbarui_jalur', $latihan->perbarui_jalur) ? 'checked' : '' }}
                                class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span>Perbarui judul ini di jalur pembelajaran</span>
                        </label>
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg flex items-center space-x-2 transition text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save w-3.5 h-3.5">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
                                <polyline points="17 21 17 13 7 13 7 21"/>
                                <polyline points="7 3 7 8 15 8"/>
                            </svg>
                            <span>Simpan Perubahan</span>
                        </button>
                    </div>
                </form>
            </main>

            <footer
                class="border-t border-[#e2e8f0] px-8 py-4 flex flex-col sm:flex-row justify-between items-center gap-2 w-full m-0 bg-transparent flex-shrink-0">
                <div class="flex flex-col sm:flex-row items-center gap-[10px] w-full sm:w-auto">
                    <a href="{{ route('dashboard') }}" class="flex items-center justify-center">
                        <img src="{{ asset('images/Logo.svg') }}" alt="Smart Exam"
                            class="w-[54px] h-[32px] object-contain">
                    </a>
                    <span
                        class="text-[#64748b] font-normal text-[12px] leading-[18px] tracking-[0px] text-center block w-full sm:w-auto">
                        &copy; 2026 Smart Exam | All rights reserved.
                    </span>
                </div>
                <div
                    class="flex space-x-4 mt-2 sm:mt-0 text-[12px] leading-[18px] font-normal tracking-[0px] text-[#475569]">
                    <a href="#" class="hover:text-blue-600 transition text-center">Cara Kerja</a>
                    <a href="#" class="hover:text-blue-600 transition text-center">Pusat Bantuan</a>
                    <a href="#" class="hover:text-blue-600 transition text-center">Hubungi Kami</a>
                </div>
            </footer>
        </div>
    </div>
</x-app-layout>
