<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    use HasFactory;
    protected $table = 'perros';

    /**
     * Relación con razas.
     *
     */
    public function raza(){
        return $this->belongsTo('App\Models\Raza');
    }

}
