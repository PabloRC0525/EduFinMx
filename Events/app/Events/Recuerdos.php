<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Recuerdos
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    // Propiedades públicas para almacenar el título y el recuerdo del evento
    public $titulo;
    public $recuerdo;

    /**
     * Create a new event instance.
     */
    public function __construct($titulo, $recuerdo)
    {
    // Asignar los valores
        $this->titulo = $titulo;
        $this->recuerdo = $recuerdo;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}