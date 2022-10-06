<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //use HasFactory;

    public function cargos()
    {
        return $this->hasMany(Cargo::class);
    }

    public function ubicaciones()
    {
        return $this->hasMany(Ubicacion::class);
    }

    public function persona()
    {
        return $this->hasOne(Persona::class);
    }

    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    } 

    public function familiares()
    {
        return $this->belongsToMany(Familiar::class);
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
