<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class testimonioEncuestaMail extends Mailable
{
    use Queueable, SerializesModels;
    public $content;
    public $tipoEnvio;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content,$tipoEnvio)
    {
         $this->content = $content;
         $this->tipoEnvio = $tipoEnvio;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

      
          return $this->markdown('public.emails.encuestaTestimonio')
            ->with(['name' => $this->content,'tipo' =>  $this->tipoEnvio])->subject('NUEVO REGISTRO DE '.$this->tipoEnvio);

    }
}
