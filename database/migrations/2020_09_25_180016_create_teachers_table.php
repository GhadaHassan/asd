<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->integer('TECHER_ID')->autoIncrement();
            $table->string('TEACHER_NAME');
            $table->text('PORTFOLIO');
            $table->integer('LEVEL_ID');
            $table->integer('SUBJECT_ID');
            $table->integer('SERVICE_ID');

            $table->foreign('LEVEL_ID')->references('LEVEL_ID')->on('levels');
            $table->foreign('SERVICE_ID')->references('SERVICE_ID')->on('services');
            $table->foreign('SUBJECT_ID')->references('SUBJECT_ID')->on('subjects');

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
        Schema::dropIfExists('teachers');
    }
}
