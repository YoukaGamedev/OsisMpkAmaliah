<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    
    protected $fillable = ['judul', 'deskripsi', 'waktu', 'no', 'aksi']; // Kolom yang bisa diisi
}
