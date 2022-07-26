<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendComfirmationRegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $getemailing;

    protected $name;

    public function __construct($getemailing, $name)
    {
        $this->getemailing = $getemailing;

        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->from($this->getemailing, $this->name)
                ->subject('comfirmation of attending 10 anniversary of KIAC')
                ->markdown('SendComfirmationRegistrationEmail')
                ->with([
                    'name' => $this->name,
                    'email' => $this->getemailing,
                ]);
    }
}
