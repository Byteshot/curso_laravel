<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnoPerro extends Model
{
    use HasFactory;
    protected $table = 'alumno_perros';
    protected $fillable = ['alumno_id', 'perro_id'];

    /**
     * Relación con alumno.
     */
    public function alumno(){
        return $this->belongsTo('App\Models\Alumno');
    }

    /**
     * Relación con perro.
     */
    public function perro(){
        return $this->belongsTo('App\Models\Perro');
    }
}
