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
