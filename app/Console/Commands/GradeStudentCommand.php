<?php

namespace App\Console\Commands;

use App\Models\FixForm;
use App\Mail\GradeStudent;
use App\Models\StudentUser;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class GradeStudentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'GradeStudent:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send grade every student';

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
        $students_users=StudentUser::get();
        foreach($students_users as $user){
            Mail::to($user)->send(new GradeStudent($request));
          }

        }
}
