<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('immunisation');
            $table->string('sex');
            $table->string('rec_of_imm');
            $table->integer('mother_id')->unsigned()->nullable();
            $table->foreign('mother_id')->references('id')->on('mothers');
            $table->integer('father_id')->unsigned()->nullable();
            $table->foreign('father_id')->references('id')->on('fathers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
