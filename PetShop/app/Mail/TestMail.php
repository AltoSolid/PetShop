<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance
     * 
     * 
     * 
     * 
     */

    public function _construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this->subject('Mail from surfsideMedia')->view('emails.TestMail');
    }
}
