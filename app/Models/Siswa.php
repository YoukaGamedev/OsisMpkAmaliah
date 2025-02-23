<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    // Define fillable properties for mass assignment
    protected $fillable = [
        'nama',
        'tanggal',
        'kelas',
        'dasi_kacu',
        'kaos_kaki',
        'sabuk',
        'nametag',
        'sepatu',
        'jas',
        'ring',
        'bros',
        'makeup',
        'telat',
        'ciput',
        'hijab',
        'almamater',
        'wearpack',
    ];
}
