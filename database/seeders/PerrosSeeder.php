<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perro;
use Faker\Factory;
class PerrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i < 100; $i++) {
            $perro = new Perro();
            $perro->nombre = $faker->name;
            $perro->descripcion = $faker->text;
            $perro->raza_id = $faker->numberBetween(1,100);
            $perro->save();
        }
    }
}
