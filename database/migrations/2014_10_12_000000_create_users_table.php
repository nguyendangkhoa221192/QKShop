<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->collation('utf8_unicode_ci');
            $table->string('email')->unique()->collation('utf8_unicode_ci');
            $table->string('password')->collation('utf8_unicode_ci');
            $table->string('phone')->collation('utf8_unicode_ci');
            $table->string('address')->collation('utf8_unicode_ci');
            $table->integer('type_id');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
