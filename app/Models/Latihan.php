<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi ke tabel Soal
    public function soals()
    {
        return $this->hasMany(Soal::class, 'latihan_id');
    }
}
