<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_question', function (Blueprint $table) {
            $table->id();
            $table->integer('e_id')->unsigned();
            $table->integer('q_id')->unsigned();
            $table->timestamps();


            // $table->foreign('e_id')
            //     ->references('id')
            //     ->on('exams');
            // $table->foreign('q_id')
            //     ->references('id')
            //     ->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_question');
    }
}
