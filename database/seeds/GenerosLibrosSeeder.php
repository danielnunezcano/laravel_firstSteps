<?php

use App\GenerosLibro;
use Illuminate\Database\Seeder;

class GenerosLibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GenerosLibro::create(['fk_genero' => '1','fk_libro' => '1']);
        GenerosLibro::create(['fk_genero' => '2','fk_libro' => '2']);
        GenerosLibro::create(['fk_genero' => '2','fk_libro' => '3']);
        GenerosLibro::create(['fk_genero' => '3','fk_libro' => '4']);
        GenerosLibro::create(['fk_genero' => '3','fk_libro' => '5']);
        GenerosLibro::create(['fk_genero' => '4','fk_libro' => '6']);
        GenerosLibro::create(['fk_genero' => '5','fk_libro' => '7']);
        GenerosLibro::create(['fk_genero' => '6','fk_libro' => '8']);
        GenerosLibro::create(['fk_genero' => '3','fk_libro' => '9']);
        GenerosLibro::create(['fk_genero' => '3','fk_libro' => '10']);
        GenerosLibro::create(['fk_genero' => '3','fk_libro' => '11']);
        GenerosLibro::create(['fk_genero' => '3','fk_libro' => '12']);
        GenerosLibro::create(['fk_genero' => '3','fk_libro' => '13']);
    }
}
