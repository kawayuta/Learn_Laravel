<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('category');
            $table->string('tag');
            $table->text('body');
            $table->string('fig_name')->nullable(); //add
            $table->string('fig_mime')->nullable(); //add
            $table->binary('fig_orig')->nullable(); //add
            $table->binary('fig_thumbnail')->nullable(); //add
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
        Schema::drop('articles');
    }
}
