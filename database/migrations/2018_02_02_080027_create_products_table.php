<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('barcode')->collation('utf8_unicode_ci');
            $table->string('name')->collation('utf8_unicode_ci');
            $table->double('price', 12, 2);
            $table->string('image_url')->collation('utf8_unicode_ci');
            $table->integer('type_id');
            $table->integer('category_id');
            $table->integer('quantity');
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
        Schema::dropIfExists('products');
    }
}