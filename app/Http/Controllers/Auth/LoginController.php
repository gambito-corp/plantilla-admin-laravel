<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ], [
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección de correo electrónico válida.',
            'password.required' => 'El campo contraseña es obligatorio.',
        ]);

        $credentials = $request->only('email', 'password');
//        dd($credentials);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->withInput($request->only('email'));
    }
}
