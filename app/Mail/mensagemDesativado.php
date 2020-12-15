<?php

namespace App\Mail;

use App\Yahp\Models\Campanha;
use App\Yahp\Models\Payment;
use App\Yahp\Models\Bank;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mensagemDesativado extends Mailable
{
    use Queueable, SerializesModels;
    private $usuario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        //
        $this->id = $id;
        // dd($usuario);

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $campanha = Campanha::where('id', $this->id)->first();
        $this->subject('Pedido de Desativamento');
        $this->to(auth()->user()->email,auth()->user()->name);

        // dd($payment);
        return $this->markdown('mail.mensagemDesativado',[
            'usuario' =>$this->usuario,
            'campanha'  => $campanha
        ]);
    }
}
