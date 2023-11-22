<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("about_us_ar")->nullable();
            $table->text("about_us_en")->nullable();
            $table->text("our_vision_ar")->nullable();
            $table->text("our_vision_en")->nullable();
            $table->text("our_mission_ar")->nullable();
            $table->text("our_mission_en")->nullable();
            $table->text("doctor_about_title_ar")->nullable();
            $table->text("doctor_about_title_en")->nullable();
            $table->text("doctor_about_description_ar")->nullable();
            $table->text("doctor_about_description_en")->nullable();
            $table->text("doctor_about_image")->nullable();
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
}
