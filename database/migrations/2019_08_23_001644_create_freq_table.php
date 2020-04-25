<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freq', function (Blueprint $table) {
            $table->bigIncrements('id_frequency');
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('discipline_id')->unsigned();
            $table->bigInteger('class_id')->unsigned();
            $table->date('date_frequency');
            $table->boolean('frequency');
            $table->foreign('student_id')->references('id_student')->on('student')->onDelete('cascade');
            $table->foreign('discipline_id')->references('id_discipline')->on('discipline')->onDelete('cascade');
            $table->foreign('class_id')->references('id_class')->on('class')->onDelete('cascade');
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
        Schema::dropIfExists('freq');
    }
}
