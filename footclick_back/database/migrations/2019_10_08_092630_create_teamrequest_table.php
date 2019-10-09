<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamrequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Team_Request', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status'); // 0 for pending and 1 for accepted
            $table->string('type'); // invite/joinRequest 
            $table->unsignedBigInteger('player_id'); // id for player
            $table->insignedBigInteger('host_id'); // id for a host
            $table->timestamp('added on')->useCurrent(); // date of team request created
 //-----------------------------------------------------@start foreign keys ---------------------------------------
   $table->foreign('host_id')->references('id')->on('Host_Team'); 
   $table->foreign('player_id')->references('id')->on('users'); 
 //-----------------------------------------------------@end foreign keys ---------------------------------------
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Team_Request');
    }
}
