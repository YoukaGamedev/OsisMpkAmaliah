<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $table = 'votes';
    protected $fillable = ['kandidat_id', 'user_id'];

    public function kandidat()
    {
        return $this->belongsTo(DataKandidat::class, 'kandidat_id');
    }
    // Di model Vote
    public function user() {
        return $this->belongsTo(User::class);
    }

}

