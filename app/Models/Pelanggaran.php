<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;

    protected $table = 'pelanggaran'; // Nama tabelnya

    protected $primaryKey = 'id_pelanggaran'; // Karena primary key kamu id_pelanggaran, bukan id

    // Fillable untuk mass assignment
    protected $fillable = [
        'siswa_id',
        'tanggal_pelanggaran',
        'dasi',
        'kacuk',
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
    ];

    // Relasi ke Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
