<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Raiz de la aplicación
     * @return Redirect
     */
    public function raiz(){
        return redirect()->route('inicio');
    }

    /**
     * Inicio
     * @return View
     */
    public function inicio(){
        return view('general.inicio');
    }

    /**
     * Acerca de
     * @return View
     */
    public function acerca(){
        return view('general.acerca');
    }

}
