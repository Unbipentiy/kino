<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->integer('poster_id');
            $table->timestamp('date');
            $table->integer('hall');
            $table->json('places');
        });
    }
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
