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
        if(Schema::hasTable('courses')) return; 
        Schema::create('courses', function (Blueprint $table) {
            $table->primary('id');
            $table->string('title');
            $table->text('description');
            $table->integer('values');
            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('Teachers');
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
        Schema::dropIfExists('courses');
    }
}
