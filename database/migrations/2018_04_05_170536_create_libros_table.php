<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('isbn')->nullable(false);
            $table->double('voto')->nullable(false);
            $table->unsignedInteger('num_voto')->nullable(false);
            $table->smallInteger('n_pags')->nullable(false);
            $table->decimal('precio',9,2)->nullable(false);
            $table->string('titulo',90)->nullable(false);
            $table->string('editorial',90)->nullable(false);
            $table->string('atributos_extra')->nullable(false);
            $table->text('resumen')->nullable(false);

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
        Schema::dropIfExists('libros');
    }
}
