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
            'fotos'
        ]);

        $this->call(AutoresSeeder::class);
        $this->call(CiudadesSeeder::class);
        $this->call(ComentariosSeeder::class);
        $this->call(FotosSeeder::class);
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
