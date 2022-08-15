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
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $organisation;
    protected $jobTitle;
    protected $companyAddress;
    protected $phoneNumber;
    protected $country;

    public function __construct($firstName, 
    $lastName, 
    $email, 
    $organisation, 
    $jobTitle, 
    $companyAddress, 
    $phoneNumber,
    $country)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->organisation = $organisation;
        $this->jobTitle = $jobTitle;
        $this->companyAddress = $companyAddress;
        $this->phoneNumber = $phoneNumber;
        $this->country = $country;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->from($this->email, $this->firstName)
                ->subject('comfirmation of attending 10 anniversary of KIAC')
                ->markdown('SendComfirmationRegistrationEmail')
                ->with([
                    'firstName' => $this->firstName,
                    'lastName' => $this->lastName,
                    'email' => $this->email,
                    'organisation' => $this->organisation,
                    'jobTitle' => $this->jobTitle,
                    'companyAddress' => $this->companyAddress,
                    'phoneNumber' => $this->phoneNumber,
                    'country' => $this->country,
                ]);
    }
}
