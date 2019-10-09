<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerPositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Player_Position', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('position_id'); // id of a position
            $table->unsignedBigInteger('player_id'); // id of a player

             //-----------------------------------------------------@start foreign keys ---------------------------------------
             $table->foreign('position_id')->references('id')->on('Position'); //position id reference
            $table->foreign('player_id')->references('id')->on('users'); // player id reference
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
        Schema::dropIfExists('Player_Position');
    }
}
