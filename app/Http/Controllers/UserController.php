<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {

        if (request()->has('empty')) {
            $users = [];
        } else {
            $users = [
                'Joel', 'ellie', 'Tess',
            ];
        }


        $title = "Listado de usuarios";

//        return view('users',[
//            'users' => $users
//        ]);

        return view('users.index', compact('title', 'users'));
    }

    public function show($id)
    {

        $title = "Usuario";
        return view('users.show', compact('id','title'));

    }

    public function create($id)
    {
        return "Crear nuevo usuario: {$id}";
    }
}
