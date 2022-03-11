<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = 'alumnos';

    /**
     * Relación con perros
     */
    public function relacionPerros(){
        return $this->hasMany('App\Models\AlumnoPerro');
    }
}
