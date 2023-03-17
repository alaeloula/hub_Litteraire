<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorie extends Model
{
    use HasFactory;
    public function Livres()
    {
        return $this->belongsTo(Livres::class);
    }
}
