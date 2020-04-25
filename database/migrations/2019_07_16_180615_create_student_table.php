<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->bigIncrements('id_student');
            $table->string('name');
            $table->date('birth');
            $table->string('name_mother');
            $table->string('name_father');
            $table->string('address');
            $table->string('cellphone');
            $table->string('phone');
            $table->integer('number_sus');
            $table->boolean('status_registered');
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
        Schema::dropIfExists('student');
    }
}
