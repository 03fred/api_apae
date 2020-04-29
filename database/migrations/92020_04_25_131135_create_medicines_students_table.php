<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines_students', function (Blueprint $table) {
            $table->id();

            $table->foreignId('medicine_id');

            $table->foreignId('student_id');

            $table->string('dosage');

            $table->string('medication_hour');

            $table->foreign('medicine_id')->references('id')->on('medicines')->onDelete('cascade');

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

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
        Schema::dropIfExists('medicines_students');
    }
}
