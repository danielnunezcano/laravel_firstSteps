<?php

use App\CriticaLibro;
use Illuminate\Database\Seeder;

class CriticaLibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CriticaLibro::create([
            'fk_libros' => 1
        ]);
        CriticaLibro::create([
            'fk_usuario' => 2
        ]);
        CriticaLibro::create([
            'critica_texto' => 'Impecable formalmente, construido con una gran solidez de la puesta en escena (...) '
        ]);
        CriticaLibro::create([
            'critica_calificacion' => 3
        ]);
    }
}
