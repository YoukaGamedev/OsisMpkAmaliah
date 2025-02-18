<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKandidat extends Model
{
    use HasFactory;

    protected $table = 'datakandidat';

    protected $fillable = [
        'nisn',
        'nomor_pasangan_calon',
        'nama_pasangan_calon',
        'visi_misi',
        'foto',
    ];

    public function votes()
{
    return $this->hasMany(Vote::class);
}

}
