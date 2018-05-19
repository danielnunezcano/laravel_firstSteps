<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>{{$title}}</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lateral.css') }}" rel="stylesheet">
</head>

<body>

<header>
    <h1>UAZON</h1>
    <div class="menu">
        <ul>
            <li>Libros</li>
            <li>Autores</li>
            <li>Lo más leido</li>
            <li>Críticas de libros</li>
            <li>Contacto</li>
        </ul>
    </div>
    <div class="col-lg-6">
        <div class="input-group">

            <input type="text" class="form-control">
            <span class="glyphicon glyphicon-search"></span>
                {{--<input type=image src="images/lupa.png" width="25" height="25">--}}
        <button src="images/lupa.png" type="button"><img src="images/lupa.png" width="25" height="25"></button>
        </div>
</header>

<!-- Begin page content -->
<main role="main" class="mainClass">

    <div class="col-2 barraLateral">
        <h3>Temas</h3>
        <ul>
            <li>Romántica</li>
            <li>Policíaca, negra y suspense</li>
            <li>Libros para niños</li>
            <li>Historia</li>
            <li>Literatura y ficción</li>
            <li>Libros de texto</li>
            <li>Consulta</li>
            <li>Libros juveniles</li>
            <li>Guías de estudio y repaso</li>
            <li>Sociedad y ciencias sociales</li>
        </ul>
        @yield('sidebar')

    </div>

    <div >

        @yield('content')

    </div>

    {{--<div class="col-4">--}}
    {{--@section('sidebar')--}}
    {{--<h2>Barra lateral</h2>--}}
    {{--@show--}}
    {{--</div>--}}


</main>

<footer class="footer">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>