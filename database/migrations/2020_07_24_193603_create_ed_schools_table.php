<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ed_schools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ed_school_type_id');
            $table->foreign('ed_school_type_id')->references('id')->on('school_types');
            $table->string('school_name');
            $table->string('school_address');
            $table->string('head_teacher');
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
        Schema::dropIfExists('ed_schools');
    }
}
