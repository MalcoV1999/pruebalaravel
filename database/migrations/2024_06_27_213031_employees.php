<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees',function(Blueprint $table){
            $table->increments('ide');
            $table->string('name',40);
            $table->string('lastname',40);
            $table->string('email',40);
            $table->string('cellphone',10);
            $table->string('sex',1);
            $table->string('description',255);
            $table->integer('age');
            $table->decimal('salary', 10, 2);
           

            $table->integer('idd')->unsigned();
            $table->foreign('idd')->references('idd')->on('departments');
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::drop('employees');
    }
}
