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
    public  $fixform;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(FixForm $fixform)
    {
        //
        $this->$fixform=$fixform;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('note issue')->view('mails.note');
    }
}
