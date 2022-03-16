<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AlumnoController extends Controller
{
    /**
     * Store Alumno
     * @param  Request $request
     * @return JSON
     */
    public function store(Request $request){

        $datos = $request->all();
        //-- Valifación de campos
        $reglas = [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'grupo_id' => 'required|integer'
        ];
        $mensajes = [
            'required' => 'El campo :attribute es obligatorio',
            'string' => 'El campo :attribute debe ser un texto',
            'max' => 'El campo :attribute debe tener un máximo de :max caracteres',
            'email' => 'El campo :attribute debe ser un email válido',
            'integer' => 'El campo :attribute debe ser un número entero'
        ];

        $validacion = Validator::make($datos, $reglas, $mensajes);

        if($validacion->fails()){
            // return response()->json([
            //     'mensaje'=>'Error de validación',
            //     'errores'=>$validacion->errors()
            // ],422);
            return back()->withErrors($validacion)->withInput();
        }
        // //-- Crear el alumno
        $alumno = Alumno::create($datos);
        return response()->json([
            'mensaje'=>'Alumno creado',
            'alumno'=>$alumno
        ],201);

    }

    /**
    * Update Alumno
    * @param  Request $request
    * @return JSON
    */
    public function update(Request $informacion){
        $datos = $informacion->all();
        //-- Valifación de campos
        $reglas = [
            'alumnoId' => 'required|integer',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'grupo_id' => 'required|integer'
        ];
        $mensajes = [
            'required' => 'El campo :attribute es obligatorio',
            'string' => 'El campo :attribute debe ser un texto',
            'max' => 'El campo :attribute debe tener un máximo de :max caracteres',
            'email' => 'El campo :attribute debe ser un email válido',
            'integer' => 'El campo :attribute debe ser un número entero'
        ];

        $validacion = Validator::make($datos, $reglas, $mensajes);

        if($validacion->fails()){
            return response()->json([
                'mensaje'=>'Error de validación',
                'errores'=>$validacion->errors()
            ],422);
        }

        //-- Buscar el alumno
        $alumno = Alumno::find($informacion->alumnoId);
        $alumno->fill($datos);

        if($alumno->isClean()){
            return response()->json([
                'mensaje'=>'No se ha modificado ningún dato'
            ],422);
        }

        $alumno->save();

        return response()->json([
            'mensaje'=>'Alumno modificado',
            'alumno'=>$alumno
        ],200);

    }

    /**
     * Delete Alumno
     * @param  $idAlumno
     * @return JSON
     */
    public function delete($idAlumno){
        $alumno = Alumno::find($idAlumno);
        if(!$alumno){
            return response()->json(['mensaje'=>'Alumno no encontrado'],404);
        }
        $alumno->delete();
        return response()->json(['mensaje'=>'Alumno eliminado'],200);
    }

    /**
     * Mostrar Alumno
     * @param  $idAlumno
     * @return JSON
     */
    public function show($idAlumno){
        $alumno = Alumno::find($idAlumno);
        if(!$alumno){
            return response()->json(['mensaje'=>'Alumno no encontrado'],404);
        }
        return response()->json(['alumno'=>$alumno],200);
    }

    /**
     * Mostrar Alumnos
     * @param  $idAlumno
     * @return View
     */
    public function index(){
        return View('test');
    }

}
