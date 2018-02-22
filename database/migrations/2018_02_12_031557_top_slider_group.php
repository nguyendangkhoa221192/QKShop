<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TopSliderGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_slider_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titleSilderItemAbove')->collation('utf8_unicode_ci');
            $table->string('titleSilderItemBelow')->collation('utf8_unicode_ci');
            $table->string('imageUrl')->collation('utf8_unicode_ci');
            $table->string('redirectUrl')->nullable($value = true)->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('top_slider_groups');
    }
}
