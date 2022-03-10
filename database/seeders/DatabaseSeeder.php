<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PublicacionesSeeder;
use Database\Seeders\create_categorias_frutas;
use Database\Seeders\create_frutas;
use Database\Seeders\RazaSeeder;
use Database\Seeders\PerrosSeeder;
use Database\Seeders\Grupos;
use Database\Seeders\Alumnos;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(PublicacionesSeeder::class);
        //$this->call(create_categorias_frutas::class);
        // $this->call(RazaSeeder::class);
        // $this->call(PerrosSeeder::class);
        //$this->call(Grupos::class);
        $this->call(Alumnos::class);
    }
}
