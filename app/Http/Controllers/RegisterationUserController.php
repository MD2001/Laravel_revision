<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class RegisterationUserController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }

    public function store()
    {
        $validateedAttriputes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required',Password::min(6), 'confirmed'],
        ]);

        $user=User::create($validateedAttriputes);
        Auth::login($user);
        return redirect('/jobs');
    }
}
