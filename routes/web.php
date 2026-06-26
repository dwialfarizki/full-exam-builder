<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [LatihanController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // --- SEKTOR LATIHAN ---
    Route::get('/latihan', [LatihanController::class, 'index'])->name('latihan.index');
    Route::get('/latihan/tambah', [LatihanController::class, 'create'])->name('latihan.create');
    Route::post('/latihan/simpan', [LatihanController::class, 'store'])->name('latihan.store');

    // ROUTE BARU (DELETE): Untuk menghapus satu paket latihan beserta relasinya
    Route::delete('/latihan/delete/{id}', [LatihanController::class, 'destroyLatihan'])->name('latihan.destroy');

    // DIUBAH MENJADI DINAMIS: Menambahkan {id} paket latihan agar data soal di dalamnya tepat sasaran
    Route::get('/latihan/exam/{id}', [LatihanController::class, 'exam'])->name('latihan.exam');

    // DIUBAH MENJADI DINAMIS: Menambahkan {latihan_id} saat masuk ke halaman buat soal pilihan ganda
    Route::get('/latihan/exam/{latihan_id}/create-pilihan-ganda', [LatihanController::class, 'createPilihanGanda'])
        ->name('latihan.exam.create_pilihan_ganda');

    // ROUTE BARU (POST): Untuk memproses tombol "Tambah Soal Ke Latihan" dari form pilihan ganda
    Route::post('/latihan/exam/{latihan_id}/store-pilihan-ganda', [LatihanController::class, 'storePilihanGanda'])
        ->name('latihan.exam.store_pilihan_ganda');

    // --- SEKTOR MANAJEMEN SOAL (EDIT & DELETE) ---
    // Tambahan Route Edit (Menampilkan Halaman Form)
    Route::get('/latihan/exam/soal/{id}/edit', [LatihanController::class, 'editSoal'])
        ->name('latihan.exam.edit_soal');

    // Tambahan Route Update (Memproses Simpan Perubahan Data)
    Route::put('/latihan/exam/soal/{id}/update', [LatihanController::class, 'updateSoal'])
        ->name('latihan.exam.update_soal');

    Route::delete('/latihan/exam/soal/{id}', [LatihanController::class, 'destroySoal'])
        ->name('latihan.exam.destroy');
});

require __DIR__.'/auth.php';
