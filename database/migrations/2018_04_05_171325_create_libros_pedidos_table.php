<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros_pedidos', function (Blueprint $table) {

            $table->unsignedInteger('fk_libros')->nullable(false);
            $table->unsignedInteger('fk_pedidos')->nullable(false);
            $table->smallInteger('cantidad')->nullable(false);
            $table->smallInteger('precio')->nullable(false);

            $table->timestamps();

            $table->primary(array('fk_libros', 'fk_pedidos'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros_pedidos');
    }
}
