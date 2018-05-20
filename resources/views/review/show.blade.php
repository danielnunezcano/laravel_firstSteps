@extends('layout')


@section('content')

    @forelse ($libros as $libro)
        <img class="bookImage" src="{{ asset('/images/books/'.$libro->isbn.'.jpg') }}">
        {{$libro->titulo}}
    @empty
        No hay Autores registados
    @endforelse





@endsection

@section('sidebar')

    @parent

    <h3>Temas</h3>
    <ul>
        @forelse ($generos as $genero)
            <li>{{$genero->nombre}}</li>
        @empty
            No hay Generos registados
        @endforelse
    </ul>

    <h3>Autores</h3>
    <ul>
        @forelse ($autores as $autor)
            <li>{{$autor->nombre}}</li>
        @empty
            No hay Autores registados
        @endforelse
    </ul>
@endsection