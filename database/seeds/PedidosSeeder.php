<?php

use App\Pedido;
use Illuminate\Database\Seeder;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pedido::create(['total' => '36','fecha' => '2007-09-26 00:00:00','fk_usuarios' => '3','pagado' => '1']);
        Pedido::create(['total' => '61','fecha' => '2007-10-01 00:00:00','fk_usuarios' => '5','pagado' => '1']);
        Pedido::create(['total' => '140','fecha' => '2007-10-10 00:00:00','fk_usuarios' => '7','pagado' => '0']);
        Pedido::create(['total' => '195','fecha' => '2007-10-18 00:00:00','fk_usuarios' => '9','pagado' => '1']);
        Pedido::create(['total' => '100','fecha' => '2018-10-01 00:00:00','fk_usuarios' => '1','pagado' => '1']);

    }
}
