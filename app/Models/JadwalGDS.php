<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalGDS extends Model {
    use HasFactory;

    protected $table = 'jadwal_piket_gds';

    protected $fillable = ['hari','Minggu', 'pj', 'petugas_1', 'petugas_2', 'petugas_3', 'petugas_4', 'petugas_5'];
}

