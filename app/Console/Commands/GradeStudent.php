<?php

namespace App\Console\Commands;

use App\Models\FixForm;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;


class GradeStudent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Student:email1';

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


    }
}
