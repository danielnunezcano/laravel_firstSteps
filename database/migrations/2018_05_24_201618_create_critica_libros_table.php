<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriticaLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critica_libros', function (Blueprint $table) {
            $table->unsignedInteger('fk_libros')->nullable(false);
            $table->unsignedInteger('fk_usuario')->nullable(false);
            $table->text('critica_texto')->nullable(false);
            $table->unsignedInteger('critica_calificacion')->nullable(false);
            $table->date('fecha')->nullable(false);

            $table->timestamps();
            $table->primary(array('fk_libros', 'fk_usuario'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('critica_libros');
    }
}
