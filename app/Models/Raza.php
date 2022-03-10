<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    use HasFactory;
    protected $table = 'razas';

    /**
     * Relación con perros.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function perros(){
        return $this->hasMany('App\Models\Perro');
    }

    /**
     * Contar los perros que tiene.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contarPerros(){
        $nPerros = Perro::where('raza_id', $this->id)->count();
        return $nPerros;
    }

}
