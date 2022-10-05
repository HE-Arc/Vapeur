<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("genres", function (Blueprint $table) {
            $table
                ->foreignId("genre_id")
                ->nullable()
                ->constrained()
                ->onUpdate("cascade")
                ->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("genres", function (Blueprint $table) {
            $table->dropForeign(["genre_id"]);
            $table->dropColumn("genre_id");
        });
    }
};
