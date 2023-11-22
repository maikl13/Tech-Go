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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->integer('sms')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('api_token', 60)->unique();
            $table->string('password');
            $table->boolean('admin')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->bigInteger('product_id');
            $table->timestamps();
        });
        Schema::create('cart', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id');
            $table->bigInteger('user_id');
            $table->integer('qty')->nullable();
            $table->timestamps();
        });
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->timestamps();
        });
        Schema::create('favorite', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('product_id');
            $table->timestamps();
        });
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->bigInteger('city_id');
            $table->string('image')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->text('note')->nullable();
            $table->integer('delivery_1')->nullable();
            $table->integer('delivery_all')->nullable();
            $table->bigInteger('user_id');
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->integer('price')->nullable();
            $table->string('image')->nullable();
            $table->bigInteger('restaurant_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->enum('active',array('yes', 'no'))->nullable();
            $table->time('time_process')->nullable();
            $table->string('note')->nullable();
            $table->enum('featured',array('yes','no'))->nullable();
            $table->timestamps();
        });
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->date('date')->nullable();
            $table->timeTz('time')->nullable();
            $table->integer('sum')->nullable();
            $table->integer('delivery')->nullable();
            $table->integer('all_sum')->nullable();
            $table->enum('status',array('pending','processing','in_delivery','delivered','cancel'))->nullable();
            $table->timestamps();
        });
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('sum')->nullable();
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
        Schema::dropIfExists('users');
    }
}
