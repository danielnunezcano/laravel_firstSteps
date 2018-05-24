<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@show');

Route::get('/usuarios', 'UserController@index');

Route::get('/autores', 'AutoresController@show');

Route::get('/review/{id}', 'ReviewsController@show');

/*Route::get('/usuarios', function () {


    $users = [
        'Joel',
        'Ellie',
        'Tess',
        //...
    ];

    return view('users',['users' => $users]);
});*/

Route::get('/usuarios/{id}', 'UserController@show');

Route::get('/usuarios/nuevo', function () {
    return "Crear nuevo usuario";
});


Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null){
   if($nickname != null) {
       return "Bienvenido {$name}, tu apodo es {$nickname}";
   }else{
       return "Bienvenido {$name}, no tienes apodo";
   }
});

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null){
   if($nickname != null) {
       return "Bienvenido {$name}, tu apodo es {$nickname}";
   }else{
       return "Bienvenido {$name}, no tienes apodo";
   }
});


