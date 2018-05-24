<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Classes\DatosBasicos;

class HomeController extends Controller
{
    //

    public function show()
    {

        $libros = DB::select('SELECT libros.id, libros.titulo, libros.precio, libros.isbn, autores.nombre
                                FROM libros
                                INNER JOIN libros_autores
                                ON libros_autores.fk_libros = libros.id
                                INNER JOIN autores
                                ON autores.id = libros_autores.fk_autores;');

//        ->join('countries', 'countries.country_id', '=', 'leagues.country_id')

//        var_dump( $libros);

        $title = "UAZON";

        $package = new DatosBasicos();
        $autores = $package->getAutores();
        $generos = $package->getGeneros();

        return view('home.show', ['libros' => $libros, 'autores' => $autores, 'generos' => $generos, 'title' => $title]);

    }
}
