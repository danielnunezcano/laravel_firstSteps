<?php

use App\LibrosPedido;
use Illuminate\Database\Seeder;

class LibrosPedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LibrosPedido::create(['fk_libros' => '1','fk_pedidos' => '1','cantidad' => '1','precio' => '22']);
        LibrosPedido::create(['fk_libros' => '1','fk_pedidos' => '4','cantidad' => '5','precio' => '110']);
        LibrosPedido::create(['fk_libros' => '1','fk_pedidos' => '5','cantidad' => '1','precio' => '75']);
        LibrosPedido::create(['fk_libros' => '2','fk_pedidos' => '1','cantidad' => '2','precio' => '14']);
        LibrosPedido::create(['fk_libros' => '2','fk_pedidos' => '3','cantidad' => '20','precio' => '140']);
        LibrosPedido::create(['fk_libros' => '2','fk_pedidos' => '5','cantidad' => '1','precio' => '25']);
        LibrosPedido::create(['fk_libros' => '3','fk_pedidos' => '2','cantidad' => '3','precio' => '27']);
        LibrosPedido::create(['fk_libros' => '4','fk_pedidos' => '2','cantidad' => '2','precio' => '34']);
        LibrosPedido::create(['fk_libros' => '4','fk_pedidos' => '4','cantidad' => '5','precio' => '85']);

    }
}
