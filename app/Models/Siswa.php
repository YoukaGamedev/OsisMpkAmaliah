<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    
    protected $fillable = [
        'nama',
        'kelas',
        'foto',
        'qr_code',
        'is_osis', // Added OSIS status field
    ];

    // Optional: If you want to cast the is_osis field to a boolean
    protected $casts = [
        'is_osis' => 'boolean',
    ];
}
