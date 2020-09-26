<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->integer('REST_ID')->autoIncrement();
            $table->string('REST_NAME');
            $table->text('REST_DETAILS');
            // $table->integer('DEPARTMENT_ID');
            $table->integer('SERVICE_ID');
            $table->integer('USER_ID'); // OWNER

            $table->foreign('SERVICE_ID')->references('SERVICE_ID')->on('services');
            $table->foreign('USER_ID')->references('USER_ID')->on('users');
            // $table->foreign('DEPARTMENT_ID')->references('DEPARTMENT_ID')->on('departments');

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
        Schema::dropIfExists('restaurants');
    }
}
