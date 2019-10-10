<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToTestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Testimonial', function (Blueprint $table) {
            // add image
            $table->string('image'); // testimonial image url
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Testimonial', function (Blueprint $table) {
            // drop image column
            $table->dropColumn('image');
        });
    }
}
