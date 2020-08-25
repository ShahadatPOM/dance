<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->unsignedBigInteger('nok_council_id');
            $table->foreign('nok_council_id')->references('id')->on('councils');
            $table->string('nok_firstname');
            $table->string('nok_lastname');
            $table->string('nok_email');
            $table->string('nok_password');
            $table->string('nok_mobile');
            $table->string('nok_license_no');
            $table->string('nok_address');
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
        Schema::dropIfExists('noks');
    }
}
