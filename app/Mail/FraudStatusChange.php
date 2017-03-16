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
    public $messages = [];
    public $text;
    public $name_client;
    public $url;
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
        $this->text = $data['text'];
        $this->name_client = $data['name_client'];
        $this->url = $data['url'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('emails.twocheckout.error-payment')
          ->from($this->email , $this->name)
          ->subject($this->subject);
    }
}
