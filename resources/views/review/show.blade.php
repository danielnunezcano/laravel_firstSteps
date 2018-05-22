@extends('layout')


@section('content')

    @forelse ($libros as $libro)

        <div class="portada">
            <img class="bookImage" src="{{ asset('/images/books/'.$libro->isbn.'.jpg') }}">
            <div>ISBN: {{$libro->isbn}}</div>
            <div>Genero: {{$libro->genero}}</div>
        </div>
        <div>
            <h1>{{$libro->titulo}}</h1>
        </div>
        <div>
            {!! nl2br(e($libro->resumen)) !!}
        </div>


    @empty
        No exite el libro registados
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