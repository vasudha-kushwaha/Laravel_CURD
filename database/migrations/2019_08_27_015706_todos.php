<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Todos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('todos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading', 20);
            $table->string('tags', 50);
            $table->string('content', 100);
            $table->string('writer', 30);
            //$table->nullable('image');
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
        //
    }
}
