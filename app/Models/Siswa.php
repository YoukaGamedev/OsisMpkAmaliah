<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas'; // Nama tabel

    // Mass assignable attributes
    protected $fillable = [
        'nama',
        'kelas',
    ];

    // Relasi: Siswa punya banyak Pelanggaran
    public function pelanggarans()
    {
        return $this->hasMany(Pelanggaran::class, 'siswa_id');
    }
}
