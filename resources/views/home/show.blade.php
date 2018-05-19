@extends('layout')


@section('content')

    @forelse ($libros as $libro)
        <div class="bookCelda">
            <div class="pricebuble">
                {{ $libro->precio }} €
            </div>
            <img class="bookImage" src="{{ asset('/images/books/'.$libro->isbn.'.jpg') }}">
            <div class="bookTitle bookInformation">{{ $libro->titulo }}</div>
            <div class="bookAuthor bookInformation">{{ $libro->nombre }}</div>

        </div>


    @empty
        No hay usuarios registados
    @endforelse

@endsection

@section('sidebar')

    @parent

    <h3>Autores</h3>
    <ul>
        @forelse ($autores as $autor)
            <li>{{$autor->nombre}}</li>
        @empty
            No hay usuarios registados
        @endforelse
    </ul>
@endsection
