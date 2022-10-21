<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Genre::truncate();
        Schema::enableForeignKeyConstraints();

        Genre::factory()->create([
            "name" => "Action",
            "genre_id" => null,
        ]);
        Genre::factory()->create([
            "name" => "Role-Playing",
            "genre_id" => null,
        ]);
        Genre::factory()->create([
            "name" => "Strategy",
            "genre_id" => null,
        ]);
        Genre::factory()->create([
            "name" => "Adventure & Casual",
            "genre_id" => null,
        ]);
        Genre::factory()->create([
            "name" => "Simulation",
            "genre_id" => null,
        ]);
        Genre::factory()->create([
            "name" => "Sports & Racing",
            "genre_id" => null,
        ]);
        Genre::factory()->create([
            "name" => "Action Rogue-Like",
            "genre_id" => 1,
        ]);
        Genre::factory()->create([
            "name" => "Arcade & Rythme",
            "genre_id" => 1,
        ]);
        Genre::factory()->create([
            "name" => 'Beat \'Em Up ',
            "genre_id" => 1,
        ]);
        Genre::factory()->create([
            "name" => "Fighting & Martial Arts",
            "genre_id" => 1,
        ]);
        Genre::factory()->create([
            "name" => "First-Person Shooter",
            "genre_id" => 1,
        ]);
        Genre::factory()->create([
            "name" => "Platformer & Runner",
            "genre_id" => 1,
        ]);
        Genre::factory()->create([
            "name" => "Third-Person Shooter",
            "genre_id" => 1,
        ]);
        Genre::factory()->create([
            "name" => "Action RPG",
            "genre_id" => 2,
        ]);
        Genre::factory()->create([
            "name" => "Adventure RPG",
            "genre_id" => 2,
        ]);
        Genre::factory()->create([
            "name" => "JRPG",
            "genre_id" => 2,
        ]);
        Genre::factory()->create([
            "name" => "Party-Based",
            "genre_id" => 2,
        ]);
        Genre::factory()->create([
            "name" => "Rogue-Like",
            "genre_id" => 2,
        ]);
        Genre::factory()->create([
            "name" => "Strategy RPG",
            "genre_id" => 2,
        ]);
        Genre::factory()->create([
            "name" => "Turn-Based",
            "genre_id" => 2,
        ]);
        Genre::factory()->create([
            "name" => "Card & Board",
            "genre_id" => 3,
        ]);
        Genre::factory()->create([
            "name" => "City & Settlement",
            "genre_id" => 3,
        ]);
        Genre::factory()->create([
            "name" => "Grand & 4X",
            "genre_id" => 3,
        ]);
        Genre::factory()->create([
            "name" => "Military",
            "genre_id" => 3,
        ]);
        Genre::factory()->create([
            "name" => "Real-Time Strategy",
            "genre_id" => 3,
        ]);
        Genre::factory()->create([
            "name" => "Tower Defense",
            "genre_id" => 3,
        ]);
        Genre::factory()->create([
            "name" => "Turn-Based Strategy",
            "genre_id" => 3,
        ]);
        Genre::factory()->create([
            "name" => "Adventure",
            "genre_id" => 4,
        ]);
        Genre::factory()->create([
            "name" => "Adventure RPG",
            "genre_id" => 4,
        ]);
        Genre::factory()->create([
            "name" => "Casual",
            "genre_id" => 4,
        ]);
        Genre::factory()->create([
            "name" => "Metroidvania",
            "genre_id" => 4,
        ]);
        Genre::factory()->create([
            "name" => "Puzzle",
            "genre_id" => 4,
        ]);
        Genre::factory()->create([
            "name" => "Story-Rich",
            "genre_id" => 4,
        ]);
        Genre::factory()->create([
            "name" => "Visual Novel",
            "genre_id" => 4,
        ]);
        Genre::factory()->create([
            "name" => "Building & Automation",
            "genre_id" => 5,
        ]);
        Genre::factory()->create([
            "name" => "Dating",
            "genre_id" => 5,
        ]);
        Genre::factory()->create([
            "name" => "Farming & Crafting",
            "genre_id" => 5,
        ]);
        Genre::factory()->create([
            "name" => "Hobby & Job",
            "genre_id" => 5,
        ]);
        Genre::factory()->create([
            "name" => "Life & Immersive",
            "genre_id" => 5,
        ]);
        Genre::factory()->create([
            "name" => "Sandbox & Physics",
            "genre_id" => 5,
        ]);
        Genre::factory()->create([
            "name" => "Space & Flight",
            "genre_id" => 5,
        ]);
        Genre::factory()->create([
            "name" => "All Sports",
            "genre_id" => 6,
        ]);
        Genre::factory()->create([
            "name" => "Fishing & Hunting",
            "genre_id" => 6,
        ]);
        Genre::factory()->create([
            "name" => "Individual Sports",
            "genre_id" => 6,
        ]);
        Genre::factory()->create([
            "name" => "Racing",
            "genre_id" => 6,
        ]);
        Genre::factory()->create([
            "name" => "Racing Sim",
            "genre_id" => 6,
        ]);
        Genre::factory()->create([
            "name" => "Sports Sim",
            "genre_id" => 6,
        ]);
        Genre::factory()->create([
            "name" => "Team Sports",
            "genre_id" => 6,
        ]);
    }
}
