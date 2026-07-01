<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'pemains';

    // Kolom-kolom yang diizinkan untuk diisi (Ini yang bikin eror tadi!)
    protected $fillable = [
        'nama_pemain',
        'cabang_olahraga',
        'klub',
        'usia',
        'gambar'
    ];
}