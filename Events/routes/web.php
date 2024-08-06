<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiarioController; //Instruccion para importar el controlador 
use App\Http\Controllers\controllerCrudD; //Instruccion para importar el controlador
 

#   Ruta para Index

// Route::get('/', [DiarioController::class, 'metodoInicio'])->name('apodoInicio');

// Route::view('/', 'welcome')->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

#   Ruta para formulario

// Route::get('/formulario', [DiarioController::class, 'metodoFormulario'])->name('apodoFormulario');

//Route::view('/form', 'formulario')->name('form');
// Route::get('/form', function () {
//     return view('formulario');
// });

#   Ruta para recuerdos

// Route::get('/recuerdos', [DiarioController::class, 'metodoRecuerdos'])->name('apodoRecuerdos');

//Route::view('/memories', 'recuerdos')->name('memories');

// Route::get('/memories', function () {
//     return view('recuerdos');
// });


// Rutas para Diario Controller

Route::controller(DiarioController::class)->group(function (){
    //Route::get('/formulario', 'metodoFormulario')->name('apodoFormulario');
    //Route::get('/recuerdos', 'metodoRecuerdos')->name('apodoRecuerdos');
});

//Ruta del boton de la vista formulario
//Route::post('/guardarRecuerdo',[DiarioController::class, 'guardarRecuerdo'])->name('guardar');

//Rutas para controlador CRUD

Route::get('/recuerdo/create', [controllerCrudD::class, 'create'])->name('recuerdo.create');

Route::post('/recuerdo', [controllerCrudD::class, 'store'])->name('recuerdo.store');

Route::get('/recuerdo', [controllerCrudD::class, 'index'])->name('recuerdo.index');

Route::get('/', [controllerCrudD::class, 'inicio'])->name('recuerdo.inicio');

Route::put('/recuerdo/{id}/confirm', [controllerCrudD::class, 'update'])->name('recuerdo.update');

Route::delete('/recuerdo/{id}/delete', [controllerCrudD::class, 'destroy'])->name('recuerdo.destroy');