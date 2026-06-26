<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            // Menghubungkan soal ke paket latihannya
            $table->foreignId('latihan_id')->constrained('latihans')->onDelete('cascade');

            $table->text('pertanyaan');
            $table->integer('nilai')->default(1);
            $table->string('kategori')->nullable();
            $table->integer('tingkat_kesulitan')->default(1);

            // Kolom pilihan jawaban
            $table->text('opsi_a');
            $table->text('opsi_b');
            $table->text('opsi_c');
            $table->text('opsi_d');

            // Menyimpan kunci jawaban berupa string huruf ('A', 'B', 'C', atau 'D')
            $table->string('jawaban_benar', 1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
