<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRecuerdos; //Instruccion para importar el validador

class DiarioController extends Controller //Clase que hereda todo lo que necesita de Controller
{
    //
    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        return view('formulario');
    }

    public function metodoRecuerdos(){
        return view('recuerdos');
    }

    public function guardarRecuerdo(validadorFormRecuerdos $req){

        /* $validated = $req->validate([ //La validacion es un arreglo
            // La primera parte de la validacion es el nombre del input
            // La segunda parte es la regla de validacion
            'txtTitulo' => 'required|max:25',
            'txtRecuerdo' => 'required|min:4',
        ]); */
        
        /* Redirigimos al formulario con un mensaje con la funcion with donde el primer parametro es
        un identificador y el segundo parametro es el mensaje */

        return redirect('/formulario')->with('confirmacion','Recuerdo guardado con exito');
        
        // Codigo php para imprimir en pantalla
        // echo "<p>";
        // echo $req->ip();
        // echo " - ";
        // echo $req->path(); //Ruta
        // echo " - ";
        // echo $req->method();  
        // echo " - ";
        // echo $req->input('txtTitulo'); 
        // "</p>";

    }
}
