<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBestgoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BestGoal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('video'); // video url
            $table->text('description'); // video description
            $table->unsignedBigInteger('player_id'); // player id
            $table->timestamp('added on')->useCurrent(); // date of video added
             //-----------------------------------------------------@start foreign keys ---------------------------------------
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
        Schema::dropIfExists('BestGoal');
    }
}
