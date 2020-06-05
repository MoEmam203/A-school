<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedInteger('s_id')->unique();
            // $table->date('date');
            $table->unsignedInteger('level');
            // $table->unsignedInteger('order');
            $table->string('day_order');
            $table->string('class_order');
            $table->unsignedBigInteger('sub_id')->nullable();
            $table->unsignedBigInteger('e_id')->nullable();
            $table->string('type');
            $table->timestamps();


            $table->foreign('sub_id')
                ->references('id')
                ->on('subjects');
            $table->foreign('e_id')
                ->references('id')
                ->on('exams');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
