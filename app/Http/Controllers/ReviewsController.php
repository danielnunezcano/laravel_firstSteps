<?php

namespace App\Http\Controllers;

use App\Classes\DatosBasicos;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    public function show($id)
    {

        $title = "UAZON";

        $package = new DatosBasicos();
        $autores = $package->getAutores();

        $libros = DB::select('SELECT libros.voto, libros.titulo, libros.precio, libros.isbn, autores.nombre as autor, libros.resumen, generos.nombre as genero
                                FROM libros
                                INNER JOIN libros_autores
                                ON libros_autores.fk_libros = libros.id
                                INNER JOIN autores
                                ON autores.id = libros_autores.fk_autores
                                INNER JOIN generos_libros
                                ON generos_libros.fk_libro = libros.id
                                INNER JOIN generos
                                ON generos.id = generos_libros.fk_genero
                                where libros.id like '.$id.';');

        $librosAutores = DB::select('SELECT libros.titulo, libros.precio, libros.isbn, libros.id
                                FROM libros
                                INNER JOIN libros_autores
                                ON libros_autores.fk_libros = libros.id
                                WHERE libros_autores.fk_autores like (
									SELECT libros_autores.fk_autores
                                    FROM libros_autores
                                    WHERE libros_autores.fk_libros like '.$id.'
								);');

        $cont = 0;

        $generos = $package->getGeneros();

        return view('review.show', ['autores' => $autores, 'generos' => $generos, 'title' => $title, 'libros' => $libros, 'librosAutores' => $librosAutores, 'cont' => $cont ]);


    }
}
