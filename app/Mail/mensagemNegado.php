<?php

namespace App\Mail;

use App\Yahp\Models\Campanha;
use App\Yahp\Models\Payment;
use App\Yahp\Models\Bank;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mensagemNegado extends Mailable
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
        $mensagem_status = 'ok';
        $mensagem_negado = '';
        $payment = Payment::where('id', $this->id)->first();
        $this->subject('Pedido de Saque - Situação');
        $this->to(auth()->user()->email,auth()->user()->name);
        // dd($payment->status);
        if($payment->status == 2){
            $mensagem_status = 'aprovado';
        }elseif($payment->status == 4){
            $mensagem_status = 'reprovado';
            if($payment->motivo_negado){
                $mensagem_negado = "Motivo: ". nl2br($payment->motivo_negado).". Por favor tente novamente com informações corretas. ";
            }
            else{
                $mensagem_negado = "Motivo: não informado. Por favor tente novamente com informações corretas. ";
            }
        }


        $data =[
            'usuario' =>$this->usuario,
            'payment'  => $payment,
            'mensagem_status' => $mensagem_status,
            'mensagem_negado' => $mensagem_negado
        ];

        // dd($payment->campanha->titulo);
        return $this->markdown('mail.mensagemNegado',$data);
    }
}
