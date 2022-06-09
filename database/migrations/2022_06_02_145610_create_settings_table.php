<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author');
            $table->string('favicon')->nullable();
            $table->string('logo')->nullable();
            $table->string('persnalImage')->nullable();
            $table->string('bgImage')->nullable();
            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('ink')->nullable();
            $table->string('yt')->nullable();
            $table->string('lk')->nullable();
            $table->string('tk')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
