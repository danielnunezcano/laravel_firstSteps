<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosCompletosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_completos', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('total')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->unsignedInteger('fk_usuarios')->nullable();
            $table->tinyInteger('pagado')->nullable();
            $table->unsignedInteger('fk_libros')->nullable();
            $table->unsignedInteger('fk_pedidos')->nullable();
            $table->smallInteger('cantidad')->nullable();
            $table->smallInteger('precio')->nullable();
            $table->string('titulo',90)->nullable();
            $table->unsignedInteger('isbn')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos_completos');
    }
}
