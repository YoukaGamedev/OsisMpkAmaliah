<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPemilihan extends Model
{
    use HasFactory;

    protected $table = 'hasilpemilihan';
    protected $fillable = ['kandidat_id', 'jumlah_suara'];

    public function kandidat()
    {
        return $this->belongsTo(DataKandidat::class, 'kandidat_id');
    }

    public function getVoteCountAttributte()
    {
        return $this->votes()->count();
    }
}




