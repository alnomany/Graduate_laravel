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
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $request=FixForm::get();
            Mail::to("aalnomany50@gmail.com")->send(new GradeStudent($request));
        })->weeklyOn(7, '18:00');
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
