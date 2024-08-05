<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('guest')->get('/', function () {
    return view('logn');
});

Route::view('/ahorro', 'Ahooro')->middleware('auth')->name('Ahooro');

Route::view('/declaraciones', 'Declaraciones')->middleware('auth')->name('Declaraciones');

Route::view('/lecciones', 'Lecciones')->middleware('auth')->name('Lecciones');

Route::view('/perfil', 'perfil')->middleware('auth')->name('perfil');

Route::view('/edit', 'edit')->middleware('auth')->name('edit');

Route::view('/medallas', 'medallas')->middleware('auth')->name('medallas');

Route::view('/login', 'logn')->middleware('guest')->name('login');

// Ruta para mostrar el formulario de registro
Route::view('/register', 'registrar')->name('registro');

// Ruta para iniciar sesión
Route::view('/home', 'Home')->middleware('auth')->name('home');


// Ruta para procesar el registro de usuario
Route::post('/registrar-usuario', [UserController::class, 'register'])->name('registrar-usuario');

// Ruta para procesar el inicio de sesión
Route::post('/iniciar-sesion', [UserController::class, 'login'])->name('iniciar-sesion');

// Ruta para procesar el cierre de sesión
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::put('/perfil/actualizar', [UserController::class, 'Update'])->name('Actualizar');

Route::view('/confirmar', 'confirmar')->middleware('auth')->name('confirmar');

Route::delete('/eliminar-cuenta', [UserController::class, 'delete'])->name('eliminar-cuenta');