<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nok_id');
            $table->foreign('nok_id')->references('id')->on('noks');
            $table->unsignedBigInteger('ed_school_id'); 
            $table->foreign('ed_school_id')->references('id')->on('ed_schools');
            $table->unsignedBigInteger('surgery_id');
            $table->foreign('surgery_id')->references('id')->on('surgeries');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password');
            $table->string('dob');
            $table->integer('age');
            $table->string('mobile');
            $table->string('telephone');
            $table->string('image');
            $table->string('allergies_med');
            $table->string('date_joined');
            $table->string('date_terms_agreed');
            $table->boolean('status');
            $table->string('registration_source');
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
        Schema::dropIfExists('students');
    }
}
