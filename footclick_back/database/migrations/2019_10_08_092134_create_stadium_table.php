<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStadiumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Stadium', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); // stadium name
            $table->string('image'); // stadium image url
            $table->integer('capacity'); // stadium capacity (10/12)
            $table->string('region'); // stadium region
            $table->integer('price'); // stadium price/person
            $table->timestamp('added on')->useCurrent(); // date of stadium created
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Stadium');
    }
}
