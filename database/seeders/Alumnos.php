<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;
use Faker\Factory;
class Alumnos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i < 1000; $i++) {
            $alumno = new Alumno();
            $alumno->nombre = $faker->name;
            $alumno->apellido = $faker->lastName;
            $alumno->email = $faker->email;
            $alumno->grupo_id = $faker->numberBetween(1,50);
            $alumno->save();
        }
    }
}
