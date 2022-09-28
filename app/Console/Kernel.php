<?php

namespace App\Console;

use App\Mail\NoteMail;
use App\Models\FixForm;
use App\Mail\GradeStudent;
use App\Models\StudentUser;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected $commands = [
        'App\Console\Commands\GradeStudentCommand'
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        /*
        $schedule->command(function () {

        })->weekly()->mondays()->at('13:00');
        */
      //  $schedule->command('GradeStudent:email')->weekly()->mondays()->at('18:00');

     $schedule->command('GradeStudent:email')->daily();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
