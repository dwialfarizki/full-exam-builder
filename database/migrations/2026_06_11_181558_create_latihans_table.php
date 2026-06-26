<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('latihans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('keterangan')->nullable();
            $table->string('umpan_balik')->nullable();
            $table->string('tampilkan_nilai')->nullable();
            $table->string('pertanyaan_per_halaman')->default('sequential');
            $table->string('jenis_pemilihan')->nullable();
            $table->enum('acak_jawaban', ['ya', 'tidak'])->default('tidak');
            $table->enum('tampilkan_kategori', ['ya', 'tidak'])->default('tidak');
            $table->enum('sembunyikan_judul', ['ya', 'tidak'])->default('tidak');
            $table->integer('maks_percobaan')->nullable();
            $table->dateTime('start_deadline')->nullable();
            $table->dateTime('end_deadline')->nullable();
            $table->boolean('negative_score')->default(false);
            $table->boolean('save_correct')->default(false);
            $table->boolean('check_answer')->default(false);
            $table->boolean('time_control')->default(false);
            $table->integer('passing_grade')->nullable();
            $table->text('teks_akhir')->nullable();
            $table->boolean('perbarui_jalur')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('latihans');
    }
};
