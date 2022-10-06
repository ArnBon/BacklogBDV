<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    // use HasFactory;
    public function empleado()
    {
        return $this->hasMany(Empleado::class);
    }

    public function caracteristica()
    {
        return $this->hasMany(Caracteristica::class);
    }
}
