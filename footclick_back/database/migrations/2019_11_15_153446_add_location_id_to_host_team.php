<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationIdToHostTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Host_Team', function (Blueprint $table) {
            $table->unsignedBigInteger('location_id'); 
            $table->foreign('location_id')->references('id')->on('Location'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Host_Team', function (Blueprint $table) {
            $table->dropColumn('location_id');
        });
    }
}
