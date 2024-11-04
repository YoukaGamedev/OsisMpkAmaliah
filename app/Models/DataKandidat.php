<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKandidat extends Model
{
    use HasFactory;

    protected $table = 'datakandidat';

    public function votes()
{
    return $this->hasMany(Vote::class);
}

}
