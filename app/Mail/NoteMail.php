<?php

namespace App\Mail;

use App\Models\FixForm;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NoteMail extends Mailable
{
    use Queueable, SerializesModels;
    public   $currentURL;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($currentURL)
    {
        //
        $this->currentURL=$currentURL;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('issue new one')->view('mails.note');
    }
}
