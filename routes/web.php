<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('logn');
});

Route::get('Ahooro', function () {
    return view('Ahooro');
});

Route::get('Home', function () {
    return view('Home');
});

Route::get('Declaraciones', function () {
    return view('Declaraciones');
});

Route::get('Lecciones', function () {
    return view('Lecciones');
});

Route::get('perfil', function () {
    return view('perfil');
});

Route::get('edit', function () {
    return view('edit');
});

Route::get('/registrar', function () {
    return view('registrar');
});
