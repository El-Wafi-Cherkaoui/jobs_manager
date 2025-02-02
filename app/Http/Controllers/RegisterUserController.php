<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_validation = $request->validate([
            "name" => ['required'],
            "email" => ['required','email', 'unique:users'],
            'password' => ['required', Password::min(6)]
        ]);

        $employer_validation = $request->validate([
            "name" => ['required'],
            "logo" => ['required',File::types(['png', 'jpg', 'svg'])],
        ]);

        $user = User::create($user_validation);

        $logo = $request->logo->store('logos');
        $user->employer()->create([
            "name" => $employer_validation['name'],
            "logo" => $logo
        ]);

        Auth::login($user);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
