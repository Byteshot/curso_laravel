<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\AlumnoPerro;
use App\Models\Perro;
class AlumnoPerroSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach (Perro::all() as $perro) {
            $alumnoPerro = new AlumnoPerro();
            $alumnoPerro->alumno_id = $faker->numberBetween(1,100);
            $alumnoPerro->perro_id = $perro->id;
            $alumnoPerro->save();
        }
    }
}
