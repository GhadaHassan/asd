<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->integer('CAR_ID')->autoIncrement();
            $table->string('NAME');
            $table->string('DETAILS');
            $table->string('SERVICE_PHONE');
            $table->integer('USER_ID');
            $table->integer('SERVICE_ID');

            $table->foreign('USER_ID')->references('USER_ID')->on('users');
            $table->foreign('SERVICE_ID')->references('SERVICE_ID')->on('services');
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
        Schema::dropIfExists('cars');
    }
}
