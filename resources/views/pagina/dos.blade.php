@extends('layout')


@section('content')


    <form action="{{ asset('/paginatres') }}" method="post">

        {!! csrf_field() !!}
        <input type="text" id="" name="name">
        <input type="text" id="" name="email">
        <input type="password" id="" name="password">
        <button type="submit">Crear usuario</button>
    </form>

@endsection
