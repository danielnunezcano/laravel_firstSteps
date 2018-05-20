<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fotos', function (Blueprint $table) {
            $table->foreign('fk_libros')->references('id')->on('libros');
        });

        Schema::table('libros_autores', function (Blueprint $table) {
            $table->foreign('fk_libros')->references('id')->on('libros');
            $table->foreign('fk_autores')->references('id')->on('autores');
        });

        Schema::table('libros_pedidos', function (Blueprint $table) {
            $table->foreign('fk_libros')->references('id')->on('libros');
            $table->foreign('fk_pedidos')->references('id')->on('pedidos');
        });

        Schema::table('generos_libros', function (Blueprint $table) {
            $table->foreign('fk_genero')->references('id')->on('generos');
            $table->foreign('fk_libro')->references('id')->on('libros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
