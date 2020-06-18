<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('course_code');
            $table->string('semester');
            $table->integer('studyPoints');
            $table->enum('exemption', ["accepted", "declined", "requested"])->nullable();
            $table->enum('obligated', ["yes", "no"]);
            $table->integer('educations_id')->unsigned()->nullable();

            $table->foreign('educations_id')->references('id')->on('educations');
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
