<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDpt extends Model
{
    use HasFactory;

    protected $table = 'datadpt';

    public function votes()
{
    return $this->hasMany(Vote::class);
}

}
