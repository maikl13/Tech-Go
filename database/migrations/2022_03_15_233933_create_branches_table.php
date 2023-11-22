<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("title_ar")->nullable();
            $table->text("title_en")->nullable();
            $table->text("address_ar")->nullable();
            $table->text("address_en")->nullable();
            $table->text("worktimes_ar")->nullable();
            $table->text("worktimes_en")->nullable();
            $table->text("phone")->nullable();
            $table->text("image")->nullable();
            $table->text("lat")->nullable();
            $table->text("long")->nullable();
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
        Schema::dropIfExists('branches');
    }
}
