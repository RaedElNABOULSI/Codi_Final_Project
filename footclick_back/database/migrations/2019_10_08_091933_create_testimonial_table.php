<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Testimonial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); // testimonial author
            $table->text('content'); // testimonial content
            $table->timestamp('added on')->useCurrent(); // date of testimonial added
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Testimonial');
    }
}
