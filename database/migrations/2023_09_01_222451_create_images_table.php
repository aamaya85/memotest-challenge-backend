<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration {

    public function up() {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->unsignedInteger('memotest_id');
            $table->timestamps();
            $table->foreign('memotest_id')->references('id')->on('memotests')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('images');
    }
}
