<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('mast_state', function (Blueprint $table) {
            $table->smallInteger('country')->nullable()->change();
            $table->foreign('country')->references('countryID')->on('mast_country');
        });

        Schema::table('mast_district', function (Blueprint $table) {
            $table->smallInteger('country')->nullable()->change();
            $table->foreign('country')->references('countryID')->on('mast_country');
            $table->smallInteger('state')->nullable()->change();
            $table->foreign('state')->references('stateID')->on('mast_state');
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
