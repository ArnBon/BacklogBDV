<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    // use HasFactory;
    public function solicitud()
    {
        return $this->hasMany(Solicitud::class);
    }

    public function libras()
    {
        return $this->belongsToMany(Libra::class);
    }
}
