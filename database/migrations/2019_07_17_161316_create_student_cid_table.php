<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentCidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cid_student', function (Blueprint $table) {
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('cid_id')->unsigned();
            $table->foreign('cid_id')->references('id_cid')->on('cid')->onDelete('cascade');
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
        Schema::dropIfExists('student_cid');
    }
}
