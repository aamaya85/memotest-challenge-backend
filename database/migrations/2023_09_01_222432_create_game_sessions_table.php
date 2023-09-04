<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameSessionsTable extends Migration {

    public function up() {
        Schema::create('game_sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('memotest_id');
            $table->integer('retries');
            $table->integer('number_of_pairs');
            $table->enum('state', ['Started', 'Completed']);
            $table->timestamps();
            $table->foreign('memotest_id')->references('id')->on('memotests')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('game_sessions');
    }
}
