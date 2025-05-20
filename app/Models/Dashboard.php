<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    protected $table = 'dashboard';

    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'status_pemilu',
    ];

    // Jika kamu menggunakan kolom timestamps tapi tabel tidak punya created_at dan updated_at
    public $timestamps = false;
}
