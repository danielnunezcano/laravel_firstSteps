@extends('layout')


@section('content')

    @forelse ($libros as $libro)

        <div class="portada">
            <img class="bookImage" src="{{ asset('/images/books/'.$libro->isbn.'.jpg') }}">
            <div>ISBN: {{$libro->isbn}}</div>
            <div>Genero: {{$libro->genero}}</div>
            <div class="star-rating">
                @for ($i = 0; $i < 5; $i++, $cont++)
                    @if(intval($libro->voto) > $i)
                        <a href="#">&#9733;</a>
                    @else
                        <a style="color: #95a5a6" href="#">&#9733;</a>
                    @endif
                @endfor
            </div>
        </div>
        <div>
            <h1>{{$libro->titulo}}</h1>
        </div>
        <div>
            {!! nl2br(e($libro->resumen)) !!}
        </div>
        <h3>Libros de {{$libro->autor}}</h3>

    @empty
        No exite el libro registados
    @endforelse



        <table class="tableLibros">
            <tr>
                <th class="celdaTable"></th>
                <th class="celdaTable">Título</th>
                <th class="celdaTable">Año</th>
            </tr>


            @forelse ($librosAutores as $libro)
                <tr class="filaTable">
                    <td width="80px" class="celdaTable">
                        <div class="celdaTableImagen">
                            <a href="{{ asset('review/'.$libro->id) }}" title="{{$libro->titulo}}">
                                <img class="imageLibroCelda" src="{{ asset('/images/books/'.$libro->isbn.'.jpg') }}">
                            </a>
                        </div>
                    </td>
                    <td class="celdaTable">{{$libro->titulo}}</td>
                    <td class="celdaTable">2008</td>
                </tr>
            @empty
                <tr>
                    <td></td>
                    <td>No hay Autores registados</td>
                    <td></td>
                </tr>
            @endforelse


        </table>
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