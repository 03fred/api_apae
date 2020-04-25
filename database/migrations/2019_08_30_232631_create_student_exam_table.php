<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_exam', function (Blueprint $table) {
            $table->bigIncrements('id_exam_student');
            $table->double('value_obtained');
            $table->bigInteger('exam_id')->unsigned();
            $table->bigInteger('student_id')->unsigned();
            $table->foreign('exam_id')->references('id_exam')->on('exam')->onDelete('cascade');
            $table->foreign('student_id')->references('id_student')->on('student')->onDelete('cascade');
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
        Schema::dropIfExists('student_exam');
    }
}
