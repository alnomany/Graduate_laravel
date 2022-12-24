<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GradeStudent extends Mailable
{
    use Queueable, SerializesModels;
   // public   $request;
   public $id;
   public $code;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    /*
    public function __construct($request)
    {
        //
        $this->request=$request;

    }
*/
public function __construct($id,$code)
{
    //
    $this->id=$id;
    $this->code= $code;

}
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // return $this->subject('Student Grade')->view('mails.student_grade');
    return $this->subject('Verfication')->view('mails.verfication');

    }
}
