<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function show()
    {

        $libros = DB::select('SELECT libros.titulo, libros.precio, libros.isbn, autores.nombre
                                FROM libros
                                INNER JOIN libros_autores
                                ON libros_autores.fk_libros = libros.id
                                INNER JOIN autores
                                ON autores.id = libros_autores.fk_autores;');

//        ->join('countries', 'countries.country_id', '=', 'leagues.country_id')

//        var_dump( $libros);

        $title = "UAZON";

        $autores = DB::select('SELECT autores.nombre FROM autores');

        return view('home.show', ['libros' => $libros, 'autores' => $autores, 'title' => $title]);

    }
}
