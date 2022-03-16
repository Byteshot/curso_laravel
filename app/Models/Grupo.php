<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table = 'grupos';
    protected $fillable = [
                        'nombre',
                        'descripcion',
                        'codigo',
                        ];
    //public $timestamps = false;

    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno');
    }

    public function contaralumnos(){
        $alumnos = Alumno::where('grupo_id',$this->id)->get();
        return count($alumnos);
    }

}
