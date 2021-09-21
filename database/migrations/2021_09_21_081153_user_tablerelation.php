<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTablerelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->integer('referby')->nullable()->change();
            $table->foreign('referby')->references('userID')->on('user');
            $table->integer('beneficiary')->nullable()->change();
            $table->foreign('beneficiary')->references('userID')->on('user');
            $table->integer('advisor')->nullable()->change();
            $table->foreign('advisor')->references('userID')->on('user');
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('userID')->on('user');
        });

        Schema::table('hr_interview', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
        });

        Schema::table('student', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('userID')->on('user');
        });

        Schema::table('student_aim', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('userID')->on('user');
        });

        Schema::table('student_edutrain', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('userID')->on('user');
        });

        Schema::table('student_performance', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('userID')->on('user');
        });

        Schema::table('student_variable', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
        });

        Schema::table('template_mail', function (Blueprint $table) {
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('euser')->on('user');
        });

        Schema::table('template_pitch', function (Blueprint $table) {
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('euser')->on('user');
        });

        Schema::table('template_sms', function (Blueprint $table) {
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('euser')->on('user');
        });

        Schema::table('user_advisor', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
        });

        Schema::table('user_crm', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('userID')->on('user');
        });

        Schema::table('user_links', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
        });

        Schema::table('user_login', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
        });

        Schema::table('user_modify', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('userID')->on('user');
        });

        Schema::table('user_refer', function (Blueprint $table) {
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('userID')->on('user');
        });

        Schema::table('user_support', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('userID')->on('user');
        });

        Schema::table('user_testimonial', function (Blueprint $table) {
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('userID')->on('user');
        });

        Schema::table('user_update', function (Blueprint $table) {
            $table->integer('userID')->nullable()->change();
            $table->foreign('userID')->references('userID')->on('user');
            $table->integer('euser')->nullable()->change();
            $table->foreign('euser')->references('userID')->on('user');
        });

        Schema::table('user_variable', function (Blueprint $table) {
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
