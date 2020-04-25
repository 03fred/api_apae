<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUclasseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uclasse', function (Blueprint $table) {
            $table->bigInteger('user_discipline_id')->unsigned();
            $table->bigInteger('class_id')->unsigned();
            $table->foreign('user_discipline_id')->references('id_user_discipline')->on('teacher_discipline')->onDelete('cascade');
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
        Schema::dropIfExists('uclasse');
    }
}
