<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Denuncia extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Mensaje Recibido';
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        //
        $this->msg = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $correo =  $this->view('buzon.emails.denuncia-anonima')->subject('Canal de Denuncias Veladoras Aramo');

        for ($i = 0; $i< count($this->msg['adjunto']); $i++){
            $correo->attach($this->msg['adjunto'] [$i]->getRealPath(),[
                'as' => $this->msg['adjunto'] [$i]->getClientOriginalName()
            ]);
        }

        return $correo;
                 
    }
}
