<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class Email extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(stdClass $email)
    {
        $this->email = $email;  
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject($this->email->assunto);
        $this->to($this->email->email, $this->email->email);
        return $this->view('sendemail')->with(['mensagem' => $this->email->mensagem]);
    }
}
