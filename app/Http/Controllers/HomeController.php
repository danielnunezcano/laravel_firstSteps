<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Classes\DatosBasicos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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

    public function actionPaginaDos(){


        $title = "UAZON";
        return view('pagina.dos', ['title' => $title]);
    }

    public function actionPaginaTres(){



        $title = "UAZON";
        return view('pagina.tres', ['title' => $title]);
    }

    public function actionPaginaCuatro(){
        $title = "UAZON";
        return view('pagina.cuatro', ['title' => $title]);
    }
}
