<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User_Role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id'); // id of a user
            $table->unsignedBigInteger('role_id'); // id of a role
            $table->timestamps();
            //-----------------------------------------------------@start foreign keys ---------------------------------------
            $table->foreign('user_id')->references('id')->on('users'); // user id reference
            $table->foreign('role_id')->references('id')->on('Role'); // role id reference
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
        Schema::dropIfExists('User_Role');
    }
}
