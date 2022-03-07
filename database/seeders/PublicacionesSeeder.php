<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publicacion;
class PublicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // -- Seeder para la tabla publicaciones
        $nombres = ["Publicación 1", "Publicación 2", "Publicación 3", "Publicación 4", "Publicación 5"];
        $slugs = ["publicacion-1", "publicacion-2", "publicacion-3", "publicacion-4", "publicacion-5"];
        $conenidos = ["Contenido de la publicación 1", "Contenido de la publicación 2", "Contenido de la publicación 3", "Contenido de la publicación 4", "Contenido de la publicación 5"];

        for ($i = 0; $i < count($nombres); $i++) {
            Publicacion::create([
                'nombre' => $nombres[$i],
                'slug' => $slugs[$i],
                'contenido' => $conenidos[$i],
            ]);
        }
    }
}
