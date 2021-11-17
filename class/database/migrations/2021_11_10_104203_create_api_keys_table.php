<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiKeysTable extends Migration
{
 
    public function up()
    {
        if(Schema::hasTable('api_keys')) return; 
        Schema::create('api_keys', function (Blueprint $table)
         {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('key')->unique();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('api_keys');
    }
}
