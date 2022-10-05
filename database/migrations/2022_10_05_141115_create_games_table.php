<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name')->limite(64);
            $table->string('description')->limite(4096);
            $table->decimal('price', 4, 2);
            $table->string('image_path')->limite(1024);
            $table->string('publisher')->limite(64);
            $table->string('developer')->limite(64);
            $table->string('age_rating')->limite(64);
            $table->date('release_date');
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
        Schema::dropIfExists('games');
    }
};
