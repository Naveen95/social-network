<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersProf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
    {
         Schema::create('user_details' , function(Blueprint $table){

             $table->increments('id');
             $table->timestamps();
             $table->string('firstname');
             $table->string('lastname');
             $table->string('username');
             $table->string('phno');
             $table->string('password_change');
             $table->string('nationality');
             $table->string('dobmonth');
             $table->string('dobday');
             $table->string('dobyear');

         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_details');
    }
}
