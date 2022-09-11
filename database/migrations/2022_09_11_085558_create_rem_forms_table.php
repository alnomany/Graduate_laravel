<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rem_forms', function (Blueprint $table) {
            $table->id();
            $table->string('student_number')->nullable();
            $table->string('student_name')->nullable();
            $table->string('p_name')->nullable();
            $table->string('p_rn')->nullable();
            $table->string('rest_type')->nullable();
            $table->string('tooth_number');

            $table->string('rm0')->nullable();
            $table->string('rm0_sig')->nullable();
            $table->date('rm0_date')->nullable();

            $table->string('rm1')->nullable();
            $table->string('rm1_sig')->nullable();
            $table->date('rm1_date')->nullable();

            $table->string('rm2')->nullable();
            $table->string('rm2_sig')->nullable();
            $table->date('rm2_date')->nullable();

            $table->string('rm3')->nullable();
            $table->string('rm3_sig')->nullable();
            $table->date('rm3_date')->nullable();

            $table->string('rm4')->nullable();
            $table->string('rm4_sig')->nullable();
            $table->date('rm4_date')->nullable();

            $table->string('rm5')->nullable();
            $table->string('rm5_sig')->nullable();
            $table->date('rm5_date')->nullable();

            $table->string('rm6')->nullable();
            $table->string('rm6_sig')->nullable();
            $table->date('rm6_date')->nullable();

            $table->string('rm7')->nullable();
            $table->string('rm7_sig')->nullable();
            $table->date('rm7_date')->nullable();

            $table->string('rm8')->nullable();
            $table->string('rm8_sig')->nullable();
            $table->date('rm8_date')->nullable();

            $table->string('rm9')->nullable();
            $table->string('rm9_sig')->nullable();
            $table->date('rm9_date')->nullable();

            $table->string('rm10')->nullable();
            $table->string('rm10_sig')->nullable();
            $table->date('rm10_date')->nullable();

            $table->string('rm11')->nullable();
            $table->string('rm11_sig')->nullable();
            $table->date('rm11_date')->nullable();

            $table->string('rm12')->nullable();
            $table->string('rm12_sig')->nullable();
            $table->date('rm12_date')->nullable();

            $table->string('rm13')->nullable();
            $table->string('rm13_sig')->nullable();
            $table->date('rm13_date')->nullable();

            $table->string('avg')->nullable();
            $table->string('total_avg')->nullable();
            $table->string('note')->nullable();


            $table->string('status')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rem_forms');
    }
}
