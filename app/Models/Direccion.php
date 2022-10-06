<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    // use HasFactory;

    public function ciudades()
    {
        return $this->hasMany(Direccion::class);
    }

    public function estados()
    {
        return $this->hasMany(Direccion::class);
    }

    public function municipios()
    {
        return $this->hasMany(Direccion::class);
    }

    public function parroquias()
    {
        return $this->hasMany(Direccion::class);
    }

    public function personas() 
    {
        return $this->belongsToMany(Persona::class);
    }
}
