<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('desc')->nullable();
            $table->integer('duration')->nullable();
            $table->string('picture')->nullable();
            $table->integer('college_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->timestamps();

            $table->foreign('college_id')->references('id')->on('college');
            $table->foreign('course_id')->references('id')->on('course');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictures');
    }
}
