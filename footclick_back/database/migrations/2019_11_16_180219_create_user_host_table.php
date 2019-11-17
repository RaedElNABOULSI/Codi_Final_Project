<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserHost', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('host_id'); 
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('host_id')->references('id')->on('Host_Team'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UserHost');
    }
}
