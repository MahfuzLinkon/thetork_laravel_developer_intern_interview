<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'Required|',
            'email' => 'Required|email|unique:users',
            'password' => 'Required|min:6',
            'password_confirmation' => 'Required|same:password',
        ],[
            'password_confirmation.same' => 'Confirm password does not match!'
        ]);

        $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => bcrypt($request->password),
        ]);
        auth()->login($user);

        return redirect('/')->with('success', 'Your account created successfully !');
    }
}
