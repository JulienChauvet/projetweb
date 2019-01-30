<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMeeting extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $dateMeeting;
    public $localisation;


    public function __construct($user, $dateMeeting, $localisation)
    {
        $this->user = $user;
        $this->dateMeeting = $dateMeeting;
        $this->localisation = $localisation;
    }

    public function build()
    {
        return $this->subject('Rendez-vous pour votre commande')->view('mail_orderMeeting');
    }
}
