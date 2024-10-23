<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;

class Sessioncontroller extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        $attripute=request()->validate([
            "email"=>['required','email'],
            "password"=>['required'],
        ]);

        if (! Auth::attempt($attripute))
        {
            throw ValidationException::withMessages([
                "email"=>"Sorry your data not mach"
            ]);
        }

        // know it later
        request()->session()->regenerate();

        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
