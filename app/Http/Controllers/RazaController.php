<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raza;
use App\Models\Perro;

class RazaController extends Controller
{
    /**
     * Obtener Razas.
     * @return \Illuminate\Http\Response
     */
    public function inicio(){
        $razas = Raza::all();
        return view('razas.inicio')->with('razas', $razas);
    }

    /**
     * Obtener detalle raza.
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $raza = Raza::findOrFail($id);
        return view('razas.detalle',['raza' => $raza]);
    }

    /**
     * Obtener detalle raza.
     * @return \Illuminate\Http\Response
     */
    public function show2($id){
        $raza = Raza::findOrFail($id);
        $perros = Perro::where('raza_id', $id)->get();
        return view('razas.detalle',['raza' => $raza,'perros' => $perros]);
    }
}
