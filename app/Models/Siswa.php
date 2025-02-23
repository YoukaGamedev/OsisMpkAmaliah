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
        'tanggal', // Tetap bisa diisi tetapi opsional
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

    // Cast properties
    protected $casts = [
        'tanggal' => 'date', // Mengizinkan null tetapi tetap bertipe date jika diisi
    ];

    public function gds()
{
    return $this->hasMany(Gds::class);
}

}
