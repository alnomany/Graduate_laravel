<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GradeStudent extends Mailable
{
    use Queueable, SerializesModels;
    public   $request;
    public $request1;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request,$request1)
    {
        //
        $this->request=$request;
        $this->request1=$request1;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Student Grade')->view('mails.student_grade');
    }
}
