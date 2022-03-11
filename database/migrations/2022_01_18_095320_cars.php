<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string ('title');
            $table->string('body');
            $table->timestamps();
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
   Schema::create('cars', function (Blueprint $table) {
       $table->bigIncrements('id');
       $table->string('title');
       $table->string('body');
       $table->string('email');
       $table->timestamps();
   });
    }
}
