<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
class PublicacionController extends Controller
{
    /**
     * Método para obtener todas las publicaciones
     * @return View
     */
    public function mostrarPublicaciones(){
        $publicaciones = Publicacion::all();
        return view('publicaciones', ['publicaciones' => $publicaciones]);
    }

    /**
     * Método para obtener una publicación
     * @param  string $slug
     * @return View
     */
    public function mostrarPublicacio($slug){
        $publicacion = Publicacion::where('slug', $slug)->first();
        return view('publicacion', ['publicacion' => $publicacion]);
    }

    /**
     * Agregar publicacion vista
     *
     * @return View
     */
    public function vistaAgregarPublicacion(){
        return view('agregarPublicacion');
    }

    /**
     * Método para Modificar una publicación
     * @param  Request $request
     * @return View
     */
    public function modificarPublicacion(Request $request){

        $publicacion = Publicacion::where('slug', $request->slugOriginal)->first();
        if($publicacion){
            $publicacion->nombre = $request->nombre;
            $publicacion->slug = $request->slug;
            $publicacion->contenido = $request->contenido;
            $publicacion->save();
            return redirect()->route('ver.publicaciones');
        }else{
            echo json_encode($request->all());
        }

    }

    /**
     * Método para obtener una publicación
     * @param  string $slug
     * @return View
     */
    public function eliminarPublicacion($slug){
        $publicacion = Publicacion::where('slug', $slug)->first();
        if($publicacion){
            $publicacion->delete();
            return redirect()->route('ver.publicaciones');
        }else{
            echo "No se encontró la publicación";
        }

    }

    /**
     * Método para Agregar una publicación
     * @param  Request $request
     * @return View
     */
    public function agregarPublicacion(Request $request){

        $publicacion = new Publicacion();

        $publicacion->nombre = $request->nombre;
        $publicacion->slug = $request->slug;
        $publicacion->contenido = $request->contenido;
        $publicacion->save();
        return redirect()->route('ver.publicaciones');


    }
}
