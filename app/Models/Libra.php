<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libra extends Model
{
    // use HasFactory;

    public function bitacoras()
    {
        return $this->belongsToMany(Bitacora::class);
    }
}
