<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchrequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Match_Request', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status'); // 0:pending 1:accepted
            $table->unsignedBigInteger('req_host_id'); // id of requested host
            $table->unsignedBigInteger('ack_host_id'); // id of host to acknowledge
            $table->unsignedBigInteger('winning_host_id')->nullable(); // id of winning host
            $table->timestamp('added on')->useCurrent(); // date of match request
                         //-----------------------------------------------------@start foreign keys ---------------------------------------
                         $table->foreign('req_host_id')->references('id')->on('Host_Team'); 
                         $table->foreign('ack_host_id')->references('id')->on('Host_Team');
                         $table->foreign('winning_host_id')->references('id')->on('Host_Team');
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
        Schema::dropIfExists('Match_Request');
    }
}