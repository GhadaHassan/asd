<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->integer('REQUEST_ID')->autoIncrement();
            $table->string('USERNAME');
            $table->string('req_num');
            $table->string('STATUES');
            $table->dateTime('req_dateTime_sent');
            $table->timestamp('req_dateTime_approved');
            $table->string('REJECTING_REASON');
            $table->integer('CLINICS_ID');

            $table->foreign('CLINICS_ID')->references('CLINICS_ID')->on('clinics');


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
        Schema::dropIfExists('requests');
    }
}
