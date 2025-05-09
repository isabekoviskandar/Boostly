<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_page()
    {
        return view('auth.login');
    }

    public function register_page()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!User::where('email', $request->email)->exists()) {
            return back()->withErrors(['email' => 'No account found with this email.']);
        }

        if (!Auth::attempt($credentials)) {
            return back()->withErrors(['password' => 'Incorrect password.']);
        }

        return redirect('/admin');
    }


    public function register(Request $request)
    {
        // dd(123);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('login_page')->with('success', 'Registration successful! Please log in.');
    }
}
