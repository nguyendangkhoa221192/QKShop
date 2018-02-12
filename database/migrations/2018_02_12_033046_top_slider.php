<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TopSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imageUrl')->collation('utf8_unicode_ci');
            $table->string('redirectUrl')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->integer('top_slider_groups_id');
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
        Schema::dropIfExists('top_sliders');
    }
}
