<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostersTable extends Migration
{
    public function up()
    {
        Schema::create('posters', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('start_date');
            $table->integer('duration');
            $table->string('genre');
            $table->text('country');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('posters');
    }
}
