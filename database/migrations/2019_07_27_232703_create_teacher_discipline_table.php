<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherDisciplineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_discipline', function (Blueprint $table) {
            $table->bigIncrements('id_user_discipline');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('discipline_id')->unsigned();
            $table->string('initial_hour');
            $table->string('end_hour');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('discipline_id')->references('id_discipline')->on('discipline')->onDelete('cascade');
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
        Schema::dropIfExists('teacher_discipline');
    }
}
