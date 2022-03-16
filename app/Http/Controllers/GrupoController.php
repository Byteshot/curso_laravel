<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Models\Grupo;
use Facade\FlareClient\Http\Response;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Validator;

class GrupoController extends Controller
{

    /*
    |--------------------------------------------------------------------------
        CRUD
    |--------------------------------------------------------------------------
        Create - Store - post
        Read - show - get
        Update - update - put/patch
        Delete destroy - delete
    */

    /**
     * Vista de inicio
     * @retun view
     */
    public function index(){
        // $grupos = Grupo::all();
        // return view('grupos.inicio',['grupos'=>$grupos]);
        $respuesta = session('HOla Mundo');
        return view('test',['respuesta'=>$respuesta]);
    }

    /**
     * Información de un grupo
     * @retun JSON
     */
    public function show($id){
        $grupo = Grupo::findOrFail($id);
        return response()->json([
            'grupo'=>$grupo,
            'alumnos'=>$grupo->alumnos,
            'nAlumnos'=>$grupo->alumnos->count()
        ]);
    }

    /**
     * Información de un grupo
     * @retun JSON
     */
    public function create(Request $informacion){

        $datos = $informacion->all();
        //-- Valifación de campos
        $reglas = [
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'codigo' => 'required|string|max:5'
        ];

        $this->validate($informacion, $reglas);
        $grupo = Grupo::create($datos);
        //$grupo = Grupo::create(['nombre'=>$datos['nombre'],'descripcion'=>$datos['descripcion'],'codigo'=>$datos['codigo']]);
        // -- Crear grupo
        // $grupo = new Grupo();
        // $grupo->nombre = $datos['nombre'];
        // $grupo->descripcion = $datos['descripcion'];
        // $grupo->codigo = $datos['codigo'];
        // $grupo->save();

        return response()->json([
            'grupo'=>$grupo,
            'alumnos'=>$grupo->alumnos,
            'nAlumnos'=>$grupo->alumnos->count()
        ]);
    }

    /**
     * Editor de un grupo
     * @retun JSON
     */
    public function update(Request $informacion, $id){

        //-- Valifación de campos
        $reglas = [
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'codigo' => 'required|string|max:5'
        ];

        $this->validate($informacion, $reglas);

        $grupo = Grupo::find($id);

        $grupo->fill($informacion->all());

        if($grupo->isClean()){
            //return View('grupos.inicio',['grupos'=>$grupo,'mensaje'=>'No se ha modificado ningún dato']);
            return response()->json([
                'error'=>'No se ha modificado ningún dato'
            ],422);
        }

        $grupo->save();

        return response()->json([
            'grupo'=>$grupo,
            'alumnos'=>$grupo->alumnos,
            'nAlumnos'=>$grupo->alumnos->count()
        ]);
    }

    /**
     * Relaciones
     */
    public function relaciones(){
        $alumnos = Alumno::all()->take(10);
        // -- Imprimir tabla de alumnos
        echo "<table border='1'>";
        echo "<tr><th>id</th><th>Nombre</th><th>Apellido</th><th>Correo</th><th>Perro</th></tr>";
        foreach ($alumnos as $alumno) {
            echo "<tr>";
            echo "<td>".$alumno->id."</td>";
            echo "<td>".$alumno->nombre."</td>";
            echo "<td>".$alumno->apellido."</td>";
            echo "<td>".$alumno->email."</td>";
            echo "<td>";
            foreach ($alumno->relacionPerros as $relacionPerro) {
                echo $relacionPerro->perro->nombre ." -> Raza:".$relacionPerro->perro->raza->nombre."<br>";
            }
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
