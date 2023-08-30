<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailSender extends Mailable
{
    use Queueable, SerializesModels;

    public  $body;
    public $subject;
    public $replyToEmail;

    /**
     * Create a new message instance.
     *
     * @param    $body
     * @param  string  $subject
     * @param  string  $replyTo
     * @return void
     */
    public function __construct($body, string $subject, string $replyToEmail)
    {
        $this->body = $body;
        $this->subject = $subject;
        $this->replyToEmail = $replyToEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
            ->replyTo($this->replyToEmail)
            ->view('email.master')
            ->with($this->body);
    }
}
