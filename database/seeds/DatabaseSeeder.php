<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->truncateTables([
            'autores',
            'ciudades',
            'comentarios',
            'fotos',
            'geo_ciudades',
            'libros',
            'libros_autores',
            'libros_pedidos',
            'paises',
            'pedidos',
            'usuarios',
            'generos',
            'generos_libros',

        ]);

        $this->call(AutoresSeeder::class);
        $this->call(CiudadesSeeder::class);
        $this->call(ComentariosSeeder::class);
        $this->call(GeoCiudadesSeeder::class);
        $this->call(LibrosSeeder::class);
        $this->call(LibrosAutoresSeeder::class);
        $this->call(PaisesSeeder::class);
        $this->call(PedidosSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(FotosSeeder::class);
        $this->call(LibrosPedidosSeeder::class);
        $this->call(GenerosSeeder::class);
        $this->call(GenerosLibrosSeeder::class);
    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach($tables as $table){
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
