<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRecuerdos; //Instruccion para importar el validador
use DB;
use Carbon\Carbon;
use App\Events\Recuerdos;

class controllerCrudD extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inicio()
    {
        return view('welcome');
    }

    public function index()
    {
        $consR = DB::table('tb_recuerdos')->get();
        return view('recuerdos', compact('consR'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorFormRecuerdos $request)
    {
        // Crear una instancia del evento Recuerdos y pasar los datos del formulario
        $recuerdo = new Recuerdos(
            $request->input('txtTitulo'),
            $request->input('txtRecuerdo')
        );

        event($recuerdo);

        // Insertar los datos en la base de datos (si lo necesitas)
        //DB::table('tb_recuerdos')->insert([
        //    'titulo' => $request->input('txtTitulo'),
        //    'recuerdo' => $request->input('txtRecuerdo'),
        //    'fecha' => Carbon::now(),
        //    'created_at' => Carbon::now(),
        //    'updated_at' => Carbon::now()
        //]);

        // Redireccionar a la página de creación con un mensaje de confirmación
        return redirect('/recuerdo/create')->with('confirmacion','Recuerdo guardado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorFormRecuerdos $request, string $id)
    {
        //
        DB::table('tb_recuerdos')->where('id', $id)->update([
            'titulo' => $request->input('txtTitulo'),
            'recuerdo' => $request->input('txtRecuerdo'),
            'updated_at' => Carbon::now()
        ]);

        return redirect('/recuerdo')->with('confirmacion','Recuerdo actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('tb_recuerdos')->where('id', $id)->delete();
        return redirect('/recuerdo')->with('confirmacion','Recuerdo eliminado con exito');
    }
}
