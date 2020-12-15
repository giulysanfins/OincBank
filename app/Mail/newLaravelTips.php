<?php

namespace App\Mail;

use App\Models\User;
use App\Yahp\Models\Campanha;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newLaravelTips extends Mailable
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

        $campanha = Campanha::where('id',$this->id)->first();
        $this->subject('Deleção de Campanha');
        $this->to(auth()->user()->email,auth()->user()->name);

        return $this->markdown('mail.newLaravelTips',[
            'usuario' =>$this->usuario,
            'campanha' => $campanha
        ]);
    }
}
