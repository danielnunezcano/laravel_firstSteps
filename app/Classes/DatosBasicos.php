<?php

namespace App\Classes;

use Illuminate\Support\Facades\DB;

class DatosBasicos
{
    function getAutores()
    {
        $autores = DB::select('SELECT autores.id, autores.nombre FROM autores ORDER BY autores.nombre');

        return $autores;
    }

    function getGeneros()
    {
        $generos = DB::select('SELECT generos.nombre FROM generos');

        return $generos;
    }
}