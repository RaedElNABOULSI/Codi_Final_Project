<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // add location id in users table and reference it to the Location table
            $table->unsignedBigInteger('location_id'); 
                   //-----------------------------------------------------@start foreign keys ---------------------------------------
            $table->foreign('location_id')->references('id')->on('Location'); // user id reference
                
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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('location_id');
        });
    }
}
