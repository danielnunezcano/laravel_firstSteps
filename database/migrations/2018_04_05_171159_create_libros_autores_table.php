<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosAutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros_autores', function (Blueprint $table) {

            $table->unsignedInteger('fk_libros')->nullable(false);
            $table->unsignedInteger('fk_autores')->nullable(false);
            $table->date('fecha')->nullable(false);

            $table->timestamps();

            $table->primary(array('fk_libros', 'fk_autores'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros_autores');
    }
}
