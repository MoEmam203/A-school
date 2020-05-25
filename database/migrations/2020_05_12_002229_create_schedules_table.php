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
            $table->id();
            $table->integer('s_id')->unsigned()->unique();
            $table->date('date');
            $table->integer('order')->unsigned();
            $table->integer('sub_id')->unsigned();
            $table->integer('e_id')->unsigned();
            $table->string('type');
            $table->timestamps();


            // $table->foreign('sub_id')
            //     ->references('id')
            //     ->on('subjects');
            // $table->foreign('e_id')
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
        Schema::dropIfExists('schedules');
    }
}
