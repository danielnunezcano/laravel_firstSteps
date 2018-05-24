@extends('layout')


@section('content')


            @forelse ($autores as $autor)
            <div class="criticaLayout">

            <div class="criticaimagen">{{$autor->nombre}}</div>
                <div class="criticaimagenlibro">
                    @forelse ($libros as $libro)
                        @if($libro->autorid == $autor->id)
                        <a href="{{ asset('review/'.$libro->id) }}" title="{{$libro->titulo}}">
                            <img class="bookImage" src="{{ asset('/images/books/'.$libro->isbn.'.jpg') }}">
                        </a>
                        @endif
                    @empty
                        No hay Autores registrados
                    @endforelse
                </div>
                <div class="criticaimagendatoslibro">
                @forelse ($libros as $libro)
                        @if($libro->autorid == $autor->id)
                             fk_usuario
                             critica_calificacion
                        @endif
                    @empty
                        No hay Datos de momento
                    @endforelse
                </div>
            </div>

            <div class="criticatexto">{{$autor->nombre}}</div>
                @forelse ($libros as $libro)
                     @if($libro->autorid == $autor->id)
                        critica_texto
                     @endif
                @empty
                    No hay críticas de momento
                @endforelse
            </div>

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