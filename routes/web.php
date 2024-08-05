<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('logn');
});

Route::view('/ahorro', 'Ahooro')->middleware('auth')->name('Ahooro');

Route::view('/declaraciones', 'Declaraciones')->name('Declaraciones');

Route::view('/lecciones', 'Lecciones')->name('Lecciones');

Route::view('/perfil', 'perfil')->name('perfil');

Route::view('/edit', 'edit')->name('edit');

Route::view('/medallas', 'medallas')->name('medallas');

Route::view('/login', 'logn')->name('login');

// Ruta para mostrar el formulario de registro
Route::view('/register', 'registrar')->name('registro');

// Ruta para iniciar sesión
Route::view('/home', 'Home')->name('home');


// Ruta para procesar el registro de usuario
Route::post('/registrar-usuario', [UserController::class, 'register'])->name('registrar-usuario');

// Ruta para procesar el inicio de sesión
Route::post('/iniciar-sesion', [UserController::class, 'login'])->name('iniciar-sesion');

// Ruta para procesar el cierre de sesión
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

