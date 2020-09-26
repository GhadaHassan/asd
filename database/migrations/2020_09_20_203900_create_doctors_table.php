<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->integer('DOCTOR_ID')->autoIncrement();
            $table->integer('EXPERIENCE_YEARS');
            $table->integer('SPECIALT_ID');
            $table->integer('DEGREES_ID');

            $table->foreign('DEGREES_ID')->references('DEGREES_ID')->on('doc_degrees');
            $table->foreign('SPECIALT_ID')->references('SPECIALT_ID')->on('doc_specialties');


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
        Schema::dropIfExists('doctors');
    }
}
