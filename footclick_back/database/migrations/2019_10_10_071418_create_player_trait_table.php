<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerTraitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Player_Trait', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('player_id'); // id of a player
            $table->unsignedBigInteger('trait_id'); // id of a football trait

           //-----------------------------------------------------@start foreign keys ---------------------------------------
             $table->foreign('player_id')->references('id')->on('users'); // player id reference
            $table->foreign('trait_id')->references('id')->on('Trait'); // trait id reference
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
        Schema::dropIfExists('Player_Trait');
    }
}
