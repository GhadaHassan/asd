<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_days', function (Blueprint $table) {
            $table->integer('DAY_ID')->autoIncrement();
            $table->datetime('OPEN_TIME');
            $table->datetime('END_TIME');
            $table->integer('CLINICS_ID');
            $table->integer('WEEK_ID');

            $table->foreign('CLINICS_ID')->references('CLINICS_ID')->on('clinics');
            $table->foreign('WEEK_ID')->references('WEEK_ID')->on('weeks');
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
        Schema::dropIfExists('clinic_days');
    }
}
