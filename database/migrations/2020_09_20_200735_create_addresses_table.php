<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->integer('ADDRESS_ID')->autoIncrement();
            $table->integer('GOV_ID');
            $table->integer('CITY_ID');
            $table->integer('VILLAGE_ID');

            $table->foreign('GOV_ID')->references('GOV_ID')->on('governorates');
            $table->foreign('CITY_ID')->references('CITY_ID')->on('cities');
            $table->foreign('VILLAGE_ID')->references('VILLAGE_ID')->on('villages');
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
        Schema::dropIfExists('addresses');
    }
}
