<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class ReservationMail extends Mailable
{
    use Queueable, SerializesModels;
      public $content;
      public $tour;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content,$tour)
    {
         $this->content = $content;
         $this->tour =$tour;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
          return $this->markdown('public.emails.reservation')
            ->with(['detalle' => $this->content,'tour' => $this->tour])->subject('RESERVA DE TOURS');;
    }
}
