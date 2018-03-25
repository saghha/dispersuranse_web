<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableStringTranslates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('string_tranlates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_locale')->unsigned();
            $table->string('key');
            $table->text('value');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['id_locale', 'key']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('string_tranlates');
    }
}
