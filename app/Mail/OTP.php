<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OTP extends Mailable
{
    use Queueable, SerializesModels;

    public $OTP;

    /**
     * OTP constructor.
     * @param $OTP
     */
    public function __construct($OTP)
    {
        $this->OTP =  $OTP;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('OTP')->with('OTP', $this->OTP);
    }
}
