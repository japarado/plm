<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('desc')->nullable();
            $table->integer('duration')->nullable();
            $table->string('picture')->nullable();
            $table->integer('college_id')->unsigned();
            $table->integer('professor_id')->unsigned();
            $table->timestamps();

            $table->foreign('college_id')->references('id')->on('college');
            $table->foreign('professor_id')->references('user_id')->on('professor');
            //$table->primary(['college_id','professor_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
}
