<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sessioncontroller extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        dd('todo!!');
    }
}
