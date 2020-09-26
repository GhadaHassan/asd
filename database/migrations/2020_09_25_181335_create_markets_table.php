<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->integer('MARKET_ID')->autoIncrement();
            $table->string('MARKET_NAME');
            $table->text('DETAILS');
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
        Schema::dropIfExists('markets');
    }
}
