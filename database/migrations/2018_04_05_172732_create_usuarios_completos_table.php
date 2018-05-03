<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosCompletosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_completos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre', 90)->nullable();
            $table->string('direccion', 90)->nullable();
            $table->unsignedInteger('cp')->nullable();
            $table->string('email', 90)->nullable();
            $table->enum('rol', ['administrador', 'comprador'])->nullable();
            $table->string('contrasenya', 50)->nullable();
            $table->unsignedInteger('fk_ciudades')->nullable();
            $table->string('ciudad', 90)->nullable();
            $table->string('pais', 90)->nullable();

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
        Schema::dropIfExists('usuarios_completos');
    }
}
