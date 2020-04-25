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
        Schema::create('teachers_disciplines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('discipline_id');
            $table->string('start');
            $table->string('end');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('discipline_id')->references('id')->on('disciplines')->onDelete('cascade');
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
        Schema::dropIfExists('teachers_disciplines');
    }
}
