<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionContrller extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($attributes)){
            session()->regenerate();
            return redirect('/');
        }
        return redirect()->back()->with('error', 'Invalid Email Or Password !');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }
}
