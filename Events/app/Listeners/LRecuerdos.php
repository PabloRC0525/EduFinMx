<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Events\Recuerdos;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LRecuerdos
{
    /**
     * Handle the event.
     *
     * @param  Recuerdos  $event
     * @return void
     */
    public function handle(Recuerdos $event): void
    {
        // Se obtiene la información del evento Recuerdo
        $titulo = $event->titulo;
        $recuerdo = $event->recuerdo;

        // Se inserta el recuerdo en la base de datos
        DB::table('tb_recuerdos')->insert([
            'titulo' => $titulo,
            'recuerdo' => $recuerdo,
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
