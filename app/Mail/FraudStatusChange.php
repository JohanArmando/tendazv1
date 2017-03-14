<?php

namespace Tendaz\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FraudStatusChange extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $email;
    public $name;
    public $messages;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->subject = $data['subject'];
        $this->email = $data['email'];
        $this->name = $data['name'];
        $this->messages = $data['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('emails.tendaz.FraudStatusChange')
          ->from($this->email , $this->name)
          ->subject('Contactenos de tendaz para '.$this->subject);
    }
}
