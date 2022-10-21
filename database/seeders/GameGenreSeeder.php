<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GameGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('game_genre')->truncate();
        Schema::enableForeignKeyConstraints();

        DB::table("game_genre")->insert([
            ["game_id" => 1, "genre_id" => 1],
            ["game_id" => 2, "genre_id" => 1],
            ["game_id" => 2, "genre_id" => 2],
            ["game_id" => 2, "genre_id" => 14],
            ["game_id" => 3, "genre_id" => 14],
            ["game_id" => 3, "genre_id" => 28],
            ["game_id" => 4, "genre_id" => 7],
            ["game_id" => 4, "genre_id" => 13],
            ["game_id" => 5, "genre_id" => 28],
            ["game_id" => 5, "genre_id" => 33],
            ["game_id" => 6, "genre_id" => 28],
            ["game_id" => 7, "genre_id" => 3],
            ["game_id" => 7, "genre_id" => 27],
            ["game_id" => 8, "genre_id" => 2],
            ["game_id" => 8, "genre_id" => 33],
            ["game_id" => 9, "genre_id" => 3],
            ["game_id" => 9, "genre_id" => 23],
            ["game_id" => 9, "genre_id" => 27],
        ]);
    }
}
