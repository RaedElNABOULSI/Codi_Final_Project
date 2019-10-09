<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostteamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Host_Team', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no_of_players'); // no. of players needed
            $table->integer('age_min'); // minimum age requested
            $table->integer('age_max'); // maximum age requested
            $table->string('team_name'); // team name
            $table->timestamp('added on')->useCurrent(); // date of hosting created
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Host_Team');
    }
}
