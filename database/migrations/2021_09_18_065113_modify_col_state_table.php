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
            $table->smallInteger('countryID')->nullable()->change();
            $table->foreign('countryID')->references('countryID')->on('mast_country');
        });

        Schema::table('mast_district', function (Blueprint $table) {
            $table->smallInteger('countryID')->nullable()->change();
            $table->foreign('countryID')->references('countryID')->on('mast_country');
            $table->smallInteger('stateID')->nullable()->change();
            $table->foreign('stateID')->references('stateID')->on('mast_state');
        });

        Schema::table('user', function (Blueprint $table) {
            $table->smallInteger('country')->nullable()->change();
            $table->foreign('country')->references('countryID')->on('mast_country');
            $table->smallInteger('state')->nullable()->change();
            $table->foreign('state')->references('stateID')->on('mast_state');
            $table->smallInteger('district')->nullable()->change();
            $table->foreign('district')->references('districtID')->on('mast_district');
        });

        // Schema::table('skills_result', function (Blueprint $table) {
        //     $table->smallInteger('userId')->nullable()->change();
        //     $table->foreign('userId')->references('userId')->on('user');
        //     $table->smallInteger('skillsID')->nullable()->change();
        //     $table->foreign('skillsID')->references('skillsID')->on('skills_evaluator');
        // });
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
