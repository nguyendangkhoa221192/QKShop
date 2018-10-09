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
            $table->string('title_silder_item_above')->collation('utf8_unicode_ci');
            $table->string('title_silder_item_below')->collation('utf8_unicode_ci');
            $table->string('image_url')->collation('utf8_unicode_ci');
            $table->string('redirect_url')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->string('created_by')->collation('utf8_unicode_ci');
            $table->string('updated_by')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->string('deleted_by')->nullable($value = true)->collation('utf8_unicode_ci');
            $table->timestamps();
            $table->softDeletes();
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
