<?php

use App\Autore;
use Illuminate\Database\Seeder;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autore::create([
            'nombre' => 'Stephen King'
        ]);
        Autore::create([
            'nombre' => 'Mario Vargas Llosa'
        ]);
        Autore::create([
            'nombre' => 'Leo Tolstoy'
        ]);
        Autore::create([
            'nombre' => 'Jorge Bucay'
        ]);
        Autore::create([
            'nombre' => 'Charles Dickens'
        ]);
        Autore::create([
            'nombre' => 'Mary Shelley'
        ]);
        Autore::create([
            'nombre' => 'Lewis Carrol'
        ]);
    }
}
