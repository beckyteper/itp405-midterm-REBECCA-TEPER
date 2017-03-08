<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $loginWasSuccessful = Auth::attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);

        $user = Auth::user();

        if ($loginWasSuccessful) {
            return redirect('/admin')
                ->with('successStatus', "Welcome back, $user->name.");
        } else {
            return redirect('/login')
                ->withErrors('Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
