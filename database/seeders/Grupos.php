<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\Grupo;
class Grupos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i < 50; $i++) {
            $grupo = new Grupo();
            $grupo->nombre = $faker->name;
            $grupo->descripcion = $faker->text;
            $grupo->codigo = $faker->randomNumber(5);
            $grupo->save();
        }
    }
}
