<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKelas extends Model
{
    use HasFactory;

    protected $table = 'datakelas';

    protected $fillable = [
        'kelas',
        'no_kelas',
    ];
}
