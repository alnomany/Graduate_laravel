<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GradeStudent extends Command
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
    protected $description = '';
    public $user;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        parent::__construct();
        $date=new Date();
        $day= $date->format('D');

        $schedule->job(new SendWeeklyEmail($user))->weekly();

    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
