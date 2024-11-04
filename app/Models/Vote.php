<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'datadpt_id', 
        'datakandidat_id',
    ];

    // Relasi ke model siswa (datadpt)
    public function siswa()
    {
        return $this->belongsTo(Datadpt::class, 'datadpt_id');
    }

    // Relasi ke model kandidat (datakandidat)
    public function kandidat()
    {
        return $this->belongsTo(Datakandidat::class, 'datakandidat_id');
    }
}
