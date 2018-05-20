@extends('layout')


@section('content')


            @forelse ($autores as $autor)
                <div class="autorLibros">
            <div>{{$autor->nombre}}</div>
            <div>
                    @forelse ($libros as $libro)
                        @if($libro->autorid == $autor->id)
                        <a href="{{ asset('review/'.$libro->id) }}" title="{{$libro->titulo}}">
                            <img class="bookImage" src="{{ asset('/images/books/'.$libro->isbn.'.jpg') }}">
                        </a>
                        @endif
                    @empty
                        No hay Autores registados
                    @endforelse
                </div>
                </div>
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