<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothes', function (Blueprint $table) {
            $table->integer('CLOTHES_ID')->autoIncrement();
            $table->string('NAME');
            $table->text('DETAILS');
            $table->integer('SHOP_PHONE');
            $table->integer('SERVICE_ID');
            $table->integer('USER_ID');

            $table->foreign('SERVICE_ID')->references('SERVICE_ID')->on('services');
            $table->foreign('USER_ID')->references('USER_ID')->on('users');

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
        Schema::dropIfExists('clothes');
    }
}
