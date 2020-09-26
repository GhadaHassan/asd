<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('USER_ID')->autoIncrement();
            $table->string('NAME');
            $table->enum('ROLE', ['NORMAL','EMPLOYEE','ADMIN'])->default('NORMAL');
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('PASSWORD');
            $table->string('PHONE');
            $table->binary('IMAGE')->nullable();
            $table->integer('ADDRESS_ID')->nullable();

            $table->foreign('ADDRESS_ID')->references('ADDRESS_ID')->on('addresses');
            $table->rememberToken();
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
