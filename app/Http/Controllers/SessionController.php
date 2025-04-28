<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        //validate
        $attributes = requst()->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required'
        ]);
        // attempt login
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Credentials do not match',
            ]);
        };
        //regenerate session
        request()->session()->regenerate();
        //redirect
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
