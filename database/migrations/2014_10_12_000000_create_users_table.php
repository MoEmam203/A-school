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
            $table->bigIncrements('id');
            // $table->unsignedInteger('u_id')->unique();
            $table->string('name', 50);
            $table->enum('is_admin', ['admin','parent','student']);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedInteger('level')->nullable();
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('address');
            $table->date('dob');
            $table->enum('blood_type', ['A+','A-','B+','B-','O+','O-','AB+','AB-']);
            $table->string('img')->nullable();
            $table->string('job')->nullable();
            $table->unsignedInteger('age');
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
