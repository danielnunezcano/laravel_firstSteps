<?php

use App\LibrosAutore;
use Illuminate\Database\Seeder;

class LibrosAutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LibrosAutore::create(['fk_libros' => '1', 'fk_autores' => '3', 'fecha' => '2004-05-31']);
        LibrosAutore::create(['fk_libros' => '2', 'fk_autores' => '6', 'fecha' => '2000-12-12']);
        LibrosAutore::create(['fk_libros' => '3', 'fk_autores' => '4', 'fecha' => '2004-04-27']);
        LibrosAutore::create(['fk_libros' => '4', 'fk_autores' => '5', 'fecha' => '2003-04-29']);
        LibrosAutore::create(['fk_libros' => '5', 'fk_autores' => '7', 'fecha' => '2018-03-12']);
        LibrosAutore::create(['fk_libros' => '6', 'fk_autores' => '8', 'fecha' => '2018-01-15']);
        LibrosAutore::create(['fk_libros' => '7', 'fk_autores' => '9', 'fecha' => '2018-02-03']);
        LibrosAutore::create(['fk_libros' => '8', 'fk_autores' => '10', 'fecha' => '2018-04-07']);
        LibrosAutore::create(['fk_libros' => '9', 'fk_autores' => '1', 'fecha' => '2018-04-07']);
        LibrosAutore::create(['fk_libros' => '10', 'fk_autores' => '1', 'fecha' => '2018-04-07']);
        LibrosAutore::create(['fk_libros' => '11', 'fk_autores' => '1', 'fecha' => '2018-04-07']);
        LibrosAutore::create(['fk_libros' => '12', 'fk_autores' => '2', 'fecha' => '2018-04-07']);
        LibrosAutore::create(['fk_libros' => '13', 'fk_autores' => '2', 'fecha' => '2018-04-07']);
    }
}
