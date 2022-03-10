<?php

namespace Database\Seeders;

use App\Models\Raza;
use Illuminate\Database\Seeder;
use Faker\Factory;

class RazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Factory::create();
        for ($i=0; $i < 100; $i++) {
            $raza = new Raza();
            $raza->nombre = $fake->name;
            $raza->descripcion = $fake->text;
            $raza->save();
        }
    }
}
