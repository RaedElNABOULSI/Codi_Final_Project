<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostreqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Host_Req_Position', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('host_id'); // id of the host
            $table->unsignedBigInteger('position_id'); // id of a football position
             //--------------------------------------------------@start foreign keys ------------------------------------
   $table->foreign('host_id')->references('id')->on('Host_Team'); 
    $table->foreign('position_id')->references('id')->on('Host_Team'); 
         //-----------------------------------------------------@end foreign keys --------------------------------------
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Host_Req_Position');
    }
}
