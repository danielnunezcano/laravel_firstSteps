<?php

use App\Libro;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Libro::create(['isbn' => '670894788', 'voto' => '3', 'num_voto' => '25', 'n_pags' => '1759', 'precio' => '22.00', 'titulo' => 'Anna Karenina', 'editorial' => 'Juventud', 'atributos_extra' => '{"color": "rojo", "premios": ["planeta2012", "Nacional2011"], "material": "papel", "dimensiones_cm": {"alto": 10, "ancho": 5, "fondo": 1}}']);
        Libro::create(['isbn' => '393048470', 'voto' => '4', 'num_voto' => '136', 'n_pags' => '130', 'precio' => '7.00', 'titulo' => 'Alice\'s Adventures in Wonderland', 'editorial' => 'Dover Publications', 'atributos_extra' => 'null']);
        Libro::create(['isbn' => '141439742', 'voto' => '3', 'num_voto' => '92', 'n_pags' => '789', 'precio' => '17.00', 'titulo' => 'Oliver Twist', 'editorial' => 'Anaya', 'atributos_extra' => 'null']);
        Libro::create(['isbn' => '743487583', 'voto' => '5', 'num_voto' => '63', 'n_pags' => '345', 'precio' => '9.00', 'titulo' => 'Frankenstein', 'editorial' => 'Anaya', 'atributos_extra' => 'null']);
        Libro::create(['isbn' => '408189985', 'voto' => '3', 'num_voto' => '25', 'n_pags' => '624', 'precio' => '21.38', 'titulo' => 'Las hijas del capitán', 'editorial' => 'Planeta', 'atributos_extra' => 'null']);
        Libro::create(['isbn' => '467052442', 'voto' => '4', 'num_voto' => '136', 'n_pags' => '256', 'precio' => '12.25', 'titulo' => 'Las almas de Brandon', 'editorial' => 'Espasa', 'atributos_extra' => 'null']);
        Libro::create(['isbn' => '403518858', 'voto' => '3', 'num_voto' => '92', 'n_pags' => '176', 'precio' => '14.15', 'titulo' => 'Piel de letra', 'editorial' => 'Aguilar', 'atributos_extra' => 'null']);
        Libro::create(['isbn' => '491291602', 'voto' => '5', 'num_voto' => '63', 'n_pags' => '536', 'precio' => '16.06', 'titulo' => 'Seremos recuerdo', 'editorial' => 'Suma', 'atributos_extra' => 'null']);

        Libro::create(['isbn' => '849759379', 'voto' => '5', 'num_voto' => '87', 'n_pags' => '1504', 'precio' => '12.30', 'titulo' => 'It (BEST SELLER)', 'editorial' => 'DEBOLSILLO', 'atributos_extra' => 'null']);
        Libro::create(['isbn' => '849062766', 'voto' => '5', 'num_voto' => '48', 'n_pags' => '496', 'precio' => '9.45', 'titulo' => 'Mr. Mercedes (Trilogía Bill Hodges 1) (BEST SELLER)', 'editorial' => 'DEBOLSILLO', 'atributos_extra' => 'null']);
        Libro::create(['isbn' => '849793102', 'voto' => '5', 'num_voto' => '21', 'n_pags' => '528', 'precio' => '9.45', 'titulo' => 'El misterio de Salem\'s Lot: 102 (BEST SELLER)', 'editorial' => 'DEBOLSILLO', 'atributos_extra' => 'null']);
        Libro::create(['isbn' => '842043199', 'voto' => '5', 'num_voto' => '17', 'n_pags' => '320', 'precio' => '17.95', 'titulo' => 'La llamada de la tribu', 'editorial' => 'ALFAGUARA', 'atributos_extra' => 'null']);
        Libro::create(['isbn' => '849062592', 'voto' => '5', 'num_voto' => '13', 'n_pags' => '413', 'precio' => '9.45', 'titulo' => 'Travesuras de la niña mala', 'editorial' => 'Debolsillo', 'atributos_extra' => 'null']);

    }
}
