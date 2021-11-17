<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseStudentsTable extends Migration
{
    
    public function up()
    {
        if(Schema::hasTable('course__students')) return; 
        Schema::create('course__students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('student_id')->references('id')->on('students');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('course__students');
    }
}
