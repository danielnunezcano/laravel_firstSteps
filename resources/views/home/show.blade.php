@extends('layout')


@section('content')

    @forelse ($libros as $libro)
        <div class="bookCelda">
            <div class="pricebuble">
                {{ $libro->precio }} €
            </div>
            <a href="{{ asset('review/'.$libro->id) }}" title="{{ $libro->titulo }}"><img class="bookImage" src="{{ asset('/images/books/'.$libro->isbn.'.jpg') }}"></a>
            <div class="bookTitle bookInformation">{{ $libro->titulo }}</div>
            <div class="bookAuthor bookInformation">{{ $libro->nombre }}</div>

        </div>


    @empty
        No hay libros registrados
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
