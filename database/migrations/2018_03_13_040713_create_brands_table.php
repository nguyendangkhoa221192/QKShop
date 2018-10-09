<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_brand')->collation('utf8_unicode_ci');
            $table->string('image_url')->collation('utf8_unicode_ci');
            $table->string('description')->collation('utf8_unicode_ci');
            $table->string('home_page_url')->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('brands');
    }
}
