<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForiegnKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skills_result', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
            $table->smallInteger('skillsID')->nullable()->change();
            $table->foreign('skillsID')->references('skillsID')->on('skills_evaluator');
        });

        Schema::table('hr_result', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
