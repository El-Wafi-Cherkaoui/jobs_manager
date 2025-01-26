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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "email" => ["email", "required"],
            "password" => ["required"]
        ]);

        if(!Auth::attempt($validated)){
            throw ValidationException::withMessages([
                "email" => "Email not found"
            ]);
        }

        request()->session()->regenerate();
        return redirect('/');

    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }
}
