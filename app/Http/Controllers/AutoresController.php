<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Classes\DatosBasicos;

class AutoresController extends Controller
{
    public function show()
    {

        $title = "UAZON";

        $package = new DatosBasicos();
        $autores = $package->getAutores();

        $libros = DB::select('SELECT libros.titulo, libros.precio, libros.isbn, autores.nombre, autores.id as autorid, libros.id
                                FROM libros
                                INNER JOIN libros_autores
                                ON libros_autores.fk_libros = libros.id
                                INNER JOIN autores
                                ON autores.id = libros_autores.fk_autores;');


        $generos = $package->getGeneros();


        return view('autores.show', ['autores' => $autores, 'generos' => $generos, 'title' => $title, 'libros' => $libros]);


    }
}
