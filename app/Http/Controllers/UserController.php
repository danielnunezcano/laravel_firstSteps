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

        return view('users', compact('title', 'users'));
    }

    public function detail($id)
    {
        return "Mostrando detalle del usuario: {$id}";
    }
}
