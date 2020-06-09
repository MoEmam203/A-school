<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_schedules', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('day');
            $table->string('committee');
            $table->string('seat_number');
            $table->string('time');
            $table->unsignedBigInteger('sub_id');
            $table->unsignedBigInteger('user_id');
            $table->string('type');
            $table->string('level');
            $table->timestamps();

            $table->foreign('sub_id')
                ->references('id')
                ->on('subjects');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_schedules');
    }
}
