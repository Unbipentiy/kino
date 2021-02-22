<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenriesTable extends Migration
{
    public function up()
    {
        Schema::create('genries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }
    public function down()
    {
        Schema::dropIfExists('genries');
    }
}
