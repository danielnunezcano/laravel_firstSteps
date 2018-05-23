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
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/autores.css') }}" rel="stylesheet">
    <link href="{{ asset('css/review.css') }}" rel="stylesheet">
</head>

<body>

<header>
    <div class="headerTitle1">
        <div class="right_title">
             <h1><a href="{{ asset('/') }}" title="UAZON">UAZON</h1>
         </div>
         <div class="left_buy">
            <input type=image src="{{ asset('images/carrito.png') }}" width="50" height="50">
         </div>
    </div>

    <hr style="color: #0056b2;" />

    <div class="headerTitle2">
        <div class="right_menu">
            <div class="navbar">
                <ul>
                    <li><a href="{{ asset('/') }}" title="Libros">Libros</a></li>
                    <li><a href="{{ asset('autores') }}" title="Autores">Autores</a></li>
                    <li><a href="#" title="Lo más leido">Lo más leido</a></li>
                    <li><a href="#" title="Críticas de libros">Críticas de libros</a></li>
                    <li><a href="#" title="Contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
        <div class="left_inputSearch">
            <div class="search">
                <input type="text" class="textSearch"  id="textSearch" placeholder=" Buscar libro por título, autor, ISBN...">
            </div>
            <div class="search">
                <input type=image src="{{ asset('images/lupa.png') }}" width="20" height="20">
            </div>
        </div>
    </div>
    
    <hr style="color: #0056b2;" />

    <div style="clear:left"></div>
</header>

<!-- Begin page content -->
<main role="main" class="mainClass">


    <div class="barraLateral">

        @yield('sidebar')

    </div>


    <div class="barraderecha">

        @yield('content')

    </div>



    {{--<div class="col-4">--}}
    {{--@section('sidebar')--}}
    {{--<h2>Barra lateral</h2>--}}
    {{--@show--}}
    {{--</div>--}}


</main>


<div style="clear: both;"></div>
<footer class="footer">
    <div class="container">
        <p>© Universidad de Alicante 2014</p>

        <nav>
            <ul>
                <li>
                    <a href="#" title="Privacidad">Privacidad</a>
                </li>
                <li class="separador">·</li>
                <li>
                    <a href="#" title="Aviso Legal">Aviso Legal</a>
                </li>
                <li class="separador">·</li>
                <li>
                    <a href="#contacto" title="Formulario de contacto" rel="ibox">Contacto</a>
                </li>
                <li class="separador">·</li>
                <li>
                    <a href="#" title="Sitemap">Sitemap</a>
                </li>
                <li class="separador">·</li>
                <li>
                    <a href="http://proyectos.proweb.ua.es/p18dnc/proyecto/rss" title="RSS">RSS</a>
                </li>
            </ul>
        </nav>

        <p class="madeby">by <a href="http://www.proweb.ua.es" title="Proweb" target="_blank">Proweb</a></p>
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