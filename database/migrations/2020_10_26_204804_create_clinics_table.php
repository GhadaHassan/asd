<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->integer('CLINICS_ID')->autoIncrement();
            $table->integer('PHONE');
            $table->integer('BOOKING_PRICE');
            $table->string('ADDRESS');
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
        Schema::dropIfExists('clinics');
    }
}
