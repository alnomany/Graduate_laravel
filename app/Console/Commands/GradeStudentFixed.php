<?php

namespace App\Console\Commands;

use App\Models\FixForm;
use App\Models\RemForm;
use App\Mail\GradeStudent;
use App\Models\StudentUser;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class GradeStudentFixed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Student:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email To Student';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $request=FixForm::get();
        $Students=StudentUser::get();
       // Mail::to("aalnomany50@gmail.com")->send(new GradeStudent($request));









        foreach($Students as $student){

            $request=FixForm::where('student_number',$student->student_number)->get();
            //
            $email=$request['p_name'];

            $data = array('name'=>'name','Email'=>$email);
            $template='mail.template';
            $subject='Fixed Message';
            Mail::send($template, $data, function($message) use($email){
                $message->to($email, 'Tutorials Point')->subject($subject);
                $message->from('aalnomany250@gmail.com','ahmed salem');
             });
            Mail::to('aalnomany50@gmail.com')->send(new GradeStudent($request));

            Mail::to($student->email)->send(new GradeStudent($request));

        }
        /*
        foreach($Students as $student){
            $request=RemForm::where('student_number',$student->student_number)->get();
            Mail::to($student->email)->send(new GradeStudent($request));
        }
        */


    }
}
