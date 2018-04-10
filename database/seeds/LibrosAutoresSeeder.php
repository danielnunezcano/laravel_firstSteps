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
        LibrosAutore::create(['fk_libros' => '2', 'fk_autores' => '7', 'fecha' => '2000-12-12']);
        LibrosAutore::create(['fk_libros' => '3', 'fk_autores' => '5', 'fecha' => '2004-04-27']);
        LibrosAutore::create(['fk_libros' => '4', 'fk_autores' => '6', 'fecha' => '2003-04-29']);
    }
}
