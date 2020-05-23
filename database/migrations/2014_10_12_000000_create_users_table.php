<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('u_id')->unsigned()->unique();
            $table->string('name', 50);
            $table->enum('is_admin', ['admin','parent','student']);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('level')->nullable();
            $table->string('address');
            $table->date('dob');
            $table->enum('blood_type', ['A+','A-','B+','B-','O+','O-','AB+','AB-']);
            $table->string('img')->nullable();
            $table->string('job')->nullable();
            $table->integer('age')->unsigned();
            $table->enum('type', ['male', 'female']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
