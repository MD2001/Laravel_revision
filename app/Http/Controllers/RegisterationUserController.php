<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterationUserController extends Controller
{
    public function create()
    {
       return view("auth.register");
    }

    public function store()
    {
        dd("todo!!");   
    }
}
