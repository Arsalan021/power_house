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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('header_background_image')->nullable();
            $table->string('about_us')->nullable();
            $table->text('about_us_desc')->nullable();
            $table->string('background_image')->nullable();
            $table->string('services_title')->nullable();
            $table->text('services_desc')->nullable();
            $table->string('services_image')->nullable();
            $table->string('custom_fit')->nullable();
            $table->text('custom_fit_desc')->nullable();
            $table->string('custom_fit_img1')->nullable();
            $table->string('custom_fit_img2')->nullable();
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
        Schema::dropIfExists('abouts');
    }
};
