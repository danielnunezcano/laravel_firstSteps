<?php

use App\Genero;
use Illuminate\Database\Seeder;

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genero::create(['nombre' => 'Realismo']);
        Genero::create(['nombre' => 'Libros juveniles']);
        Genero::create(['nombre' => 'Ciencia ficción']);
        Genero::create(['nombre' => 'Poesía']);
        Genero::create(['nombre' => 'Autoayuda']);
        Genero::create(['nombre' => 'Literatura erótica']);
    }
}
