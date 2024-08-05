<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function register(Request $request)
{
    $request->validate([
        'Nombre' => 'required|string|max:255',
        'ApellidoPaterno' => 'required|string|max:255',
        'ApellidoMaterno' => 'required|string|max:255',
        'Correo' => 'required|email|unique:Users,Correo',
        'Telefono' => 'required|numeric|digits:10|unique:Users,Telefono',
    ], [
        'Correo.unique' => 'Ya existe una cuenta con este correo electrónico.',
        'Telefono.unique' => 'Este número de teléfono ya está registrado.',
    ]);

    // Crear y guardar el nuevo usuario
    $user = new User();
    $user->Nombre = $request->Nombre;
    $user->ApellidoPaterno = $request->ApellidoPaterno;
    $user->ApellidoMaterno = $request->ApellidoMaterno;
    $user->Correo = $request->Correo;
    $user->Telefono = $request->Telefono;
    $user->password = Hash::make($request->Contraseña); // Asegúrate de que la contraseña esté hasheada
    $user->save();

    return redirect()->route('login')->with('success', 'Registro exitoso');
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
        /** @var \App\Models\User $user **/
        $user = Auth::user();
        $user->Nombre = $request->input('Nombre');
        $user->ApellidoPaterno = $request->input('ApellidoPaterno');
        $user->ApellidoMaterno = $request->input('ApellidoMaterno');

        $user->Telefono = $request->input('Telefono');
        if ($request->filled('Contraseña')) {
            $user->password = Hash::make($request->input('Contraseña'));
        }
        $user->save();
        return redirect()->route('perfil')->with('success', 'Perfil actualizado con éxito.');
    }

    public function delete(Request $request)
    {
        /** @var \App\Models\User $user **/
        $user = Auth::user();
    
        if ($user) {
            $user->delete();
        }
    
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        // Redirige a la página de inicio de sesión
        return redirect()->route('login');
    }
    
}
