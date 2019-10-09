<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    // Create 'users' Table
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('footclick_name')->unique(); // footclick username
            $table->string('foot'); // right/left
            $table->integer('height'); // 180/175/...
            $table->string('location'); // region1/region2/.....
            $table->string('position'); // GK/defender/midfielder/attacker
            $table->string('trait'); // aggressive / pace / ......
            $table->string('role');  // admin / player
            $table->rememberToken();
            $table->timestamp('added_on')->useCurrent(); // date of user created
         
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
