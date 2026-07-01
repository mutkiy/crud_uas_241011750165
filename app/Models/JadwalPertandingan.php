<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPertandingan extends Model
{
    use HasFactory;

    protected $table = 'jadwal_pertandingan';
    protected $primaryKey = 'id_event';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_event',
        'gambar',
        'nama_event',
        'tanggal',
        'tempat',
        'penanggung_jawab'
    ];
}