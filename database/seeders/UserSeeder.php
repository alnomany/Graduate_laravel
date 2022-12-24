<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('student_users')->insert([
            'student_name' => "ahmed",
            'student_number' => "5100-iwoei44",
            'email' =>"aalnomany250@gmail.com",
        ]);
    }
}
