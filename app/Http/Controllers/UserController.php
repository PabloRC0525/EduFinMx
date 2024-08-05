<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user = new User();
        $user->Nombre = $request->Nombre;
        $user->ApellidoPaterno = $request->ApellidoPaterno;
        $user->ApellidoMaterno = $request->ApellidoMaterno;
        $user->Correo = $request->Correo;
        $user->Telefono = $request->Telefono;
        $user->password = Hash::make($request->Contraseña); // Asegúrate de que la contraseña esté hasheada
        $user->save();
        Auth::login($user);

        return redirect(route('home'));
    }

    public function login(Request $request)
    {
        $credentials = [
            'Correo' => $request->input('Correo'),
            'password' => $request->input('Contraseña'),
        ];

        $remember = ($request->has('remember') ? true : false);
    
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        } else {
            return redirect()->back()->withErrors([
                'login_error' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            ]);
        }
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route ('login'));
    }

    public function Update(Request $request)
    {
        return redirect()->route('perfil')->with('success', 'Perfil actualizado con éxito.');
    }
    
}
