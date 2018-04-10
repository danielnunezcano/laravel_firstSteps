<?php

use App\Foto;
use Illuminate\Database\Seeder;

class FotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Foto::create(['fk_libros' => 1,'orden' => 1,'path_foto' => '1.jpg']);
        Foto::create(['fk_libros' => 1,'orden' => 2,'path_foto' => '2.jpg']);
        Foto::create(['fk_libros' => 1,'orden' => 3,'path_foto' => '3.jpg']);
        Foto::create(['fk_libros' => 1,'orden' => 4,'path_foto' => '4.jpg']);
        Foto::create(['fk_libros' => 2,'orden' => 1,'path_foto' => '5.jpg']);
        Foto::create(['fk_libros' => 2,'orden' => 2,'path_foto' => '6.jpg']);
        Foto::create(['fk_libros' => 2,'orden' => 3,'path_foto' => '7.jpg']);
        Foto::create(['fk_libros' => 2,'orden' => 4,'path_foto' => '8.jpg']);
        Foto::create(['fk_libros' => 4,'orden' => 1,'path_foto' => '9.jpg']);
        Foto::create(['fk_libros' => 4,'orden' => 2,'path_foto' => '10.jpg']);
        Foto::create(['fk_libros' => 4,'orden' => 3,'path_foto' => '11.jpg']);
        Foto::create(['fk_libros' => 4,'orden' => 4,'path_foto' => '12.jpg']);
        Foto::create(['fk_libros' => 3,'orden' => 1,'path_foto' => '13.jpg']);
        Foto::create(['fk_libros' => 3,'orden' => 2,'path_foto' => '14.jpg']);
        Foto::create(['fk_libros' => 3,'orden' => 3,'path_foto' => '15.jpg']);
        Foto::create(['fk_libros' => 3,'orden' => 4,'path_foto' => '16.jpg']);
    }
}
