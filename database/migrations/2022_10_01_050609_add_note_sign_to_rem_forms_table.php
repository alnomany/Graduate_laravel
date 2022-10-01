<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNoteSignToRemFormsTable extends Migration
{
    /**
     * Run the migrations.

     * @return void
     */
    public function up()
    {
        Schema::table('rem_forms', function (Blueprint $table) {
            //
            $table->string('note_sign')->nullable()->after('note');
            $table->string('arch_type1')->nullable()->after('arch_type');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rem_forms', function (Blueprint $table) {
            //
        });
    }
}
