<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Models\Grupo;
class GrupoController extends Controller
{
    /**
     * Vista de inicio
     * @retun view
     */
    public function inicio(){
        $grupos = Grupo::all();
        return view('grupos.inicio',['grupos'=>$grupos]);
    }

    /**
     * Vista de inicio
     * @retun view
     */
    public function detalleGrupo($codigo){
        $grupo = Grupo::where('codigo',$codigo)->get()->firstOrFail();
        return view('grupos.detalle',['grupo'=>$grupo]);
    }
}
