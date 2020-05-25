<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->integer('r_id')->unique()->unsigned();
            $table->integer('result')->unsigned();
            $table->integer('exam_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->timestamps();

            // $table->foreign('student_id')
            //     ->references('id')
            //     ->on('users');
            // $table->foreign('exam_id')
            //     ->references('id')
            //     ->on('exams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
