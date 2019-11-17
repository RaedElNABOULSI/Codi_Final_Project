<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHOSTREQPOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('HostReqPosition', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('host_id'); 
            $table->unsignedBigInteger('position_id'); 
            $table->foreign('host_id')->references('id')->on('Host_Team'); 
            $table->foreign('position_id')->references('id')->on('Position'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HostReqPosition');
    }
}
