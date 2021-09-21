<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColStatusUserCrmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_crm', function (Blueprint $table) {
            $table->smallInteger('status')->nullable()->change();
            $table->foreign('status')->references('statusID')->on('mast_status');
            $table->smallInteger('contact')->nullable()->change();
            $table->foreign('contact')->references('contactID')->on('mast_contact');
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
