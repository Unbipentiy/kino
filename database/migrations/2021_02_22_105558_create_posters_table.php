<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosters extends Migration
{
    public function up()
    {
        Schema::create('posters', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('start_date');
            $table->time('duration');
            $table->integer('genre_id');
            $table->text('country');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('posters');
    }
}
