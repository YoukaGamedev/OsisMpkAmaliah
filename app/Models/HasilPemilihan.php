<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPemilihan extends Model
{
    use HasFactory;

    protected $table = 'hasilpemilihan'; // Sesuaikan dengan nama tabel

    protected $fillable = [
        'kandidat_id', // ID dari kandidat
        'jumlah_suara', // Jumlah suara yang diperoleh kandidat
    ];

    public function kandidat()
    {
        return $this->belongsTo(Kandidat::class, 'kandidat_id');
    }
}

