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
            $table->bigIncrements('id');
            // $table->unsignedInteger('r_id')->unique();
            $table->unsignedInteger('result');
            // $table->unsignedBigInteger('exam_id');
            $table->string('degree');
            $table->string('final');
            $table->string('oral');
            $table->string('mid');
            $table->string('pract')->nullable();
            $table->enum('type',['first','second']);
            $table->unsignedBigInteger('sub_id');
            $table->unsignedBigInteger('student_id');            
            $table->timestamps();

            $table->foreign('student_id')
                ->references('id')
                ->on('users');

            $table->foreign('sub_id')
                ->references('id')
                ->on('subjects');
            
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
