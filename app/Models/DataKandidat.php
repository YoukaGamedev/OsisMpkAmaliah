<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKandidat extends Model
{
    use HasFactory;

    protected $table = 'kandidat';

    protected $fillable = [
        'nisn',
        'nomor_pasangan_calon',
        'nama_pasangan_calon',
        'visi_misi',
        'foto',
        'sekolah',
    ];

    public function votes()
{
    return $this->hasMany(Vote::class, 'kandidat_id');
}

}
