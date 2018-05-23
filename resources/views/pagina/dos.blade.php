@extends('layout')


@section('content')


    <form action="{{ asset('/paginatres') }}" method="post">

        {!! csrf_field() !!}
        <input type="text" id="" name="uno">
        <button type="submit">Crear usuario</button>
    </form>

@endsection
