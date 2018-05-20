<?php

namespace App\Classes;

use Illuminate\Support\Facades\DB;

class LibrosAutor
{
    function getLibros($autor)
    {
        $libros = DB::select('SELECT libros.titulo, libros.isbn
                                        FROM libros
                                        where libros.id like (
                                            select libros_autores.fk_libros 
                                            from libros_autores
                                            where libros_autores.fk_autores like '.$autor.')');

        return $libros;
    }

}