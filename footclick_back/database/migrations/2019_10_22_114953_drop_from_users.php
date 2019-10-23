<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropFromUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // drop columns 'location', 'position', 'trait'
            $table->dropColumn(['location', 'position', 'trait']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('location'); // region1/region2/.....
            $table->string('position'); // GK/defender/midfielder/attacker
            $table->string('trait'); // aggressive / pace / ......
        });
    }
}
