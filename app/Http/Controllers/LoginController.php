<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('index');
    }

    public function login(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Recuperar datos del formulario
    $email = $request->input('email');
    $pwd = $request->input('password');

    // Recuperar usuario por correo electronico usando Eloquent
    $user = User::where('email', $email)->first();

    if ($user) {
        $pwd_encriptada = $user->password;
        // Verificar si la contraseña ingresada coincide con la contraseña encriptada en la base de datos
        if (password_verify($pwd, $pwd_encriptada)) {
            // Autenticación exitosa
            Auth::loginUsingId($user->id);
            return redirect()->route('admin');
        }
    }

    // Autenticación fallida
    return redirect()->route('login')->with('error', 'errorpwd');
}


    public function logout()
    {
        // Cerrar sesión
        Auth::logout();
        return redirect()->route('login');
    }
}
