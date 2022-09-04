<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fix_forms', function (Blueprint $table) {
            $table->id();
            $table->string('student_number')->nullable();
            $table->string('student_name')->nullable();
            $table->string('p_name')->nullable();
            $table->string('p_rn')->nullable();
            $table->string('rest_type')->nullable();
            $table->string('tooth_number');

            $table->string('fm0')->nullable();
            $table->string('fm0_sig')->nullable();
            $table->date('fm0_date')->nullable();

            $table->string('fm1')->nullable();
            $table->string('fm1_sig')->nullable();
            $table->date('fm1_date')->nullable();

            $table->string('fm2')->nullable();
            $table->string('fm2_sig')->nullable();
            $table->date('fm2_date')->nullable();

            $table->string('fm3')->nullable();
            $table->string('fm3_sig')->nullable();
            $table->date('fm3_date')->nullable();

            $table->string('fm4')->nullable();
            $table->string('fm4_sig')->nullable();
            $table->date('fm4_date')->nullable();

            $table->string('fm5')->nullable();
            $table->string('fm5_sig')->nullable();
            $table->date('fm5_date')->nullable();

            $table->string('fm6')->nullable();
            $table->string('fm6_sig')->nullable();
            $table->date('fm6_date')->nullable();

            $table->string('avg')->nullable();
            $table->string('total_avg')->nullable();
            $table->string('note')->nullable();


            $table->string('status')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('fix_forms');
    }
}
