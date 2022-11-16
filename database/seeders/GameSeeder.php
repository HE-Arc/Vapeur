<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Game::truncate();
        Schema::enableForeignKeyConstraints();

        Game::factory()->create([
            'name'         => 'Dead Island',
            'description'  => 'Welcome to the zombie apocalypse experience of a lifetime - and now more beautiful than ever. Caught in the midst of an epic zombie outbreak on the tropical island of Banoi, your only thought is: Survive!',
            'price'        => 19.00,
            'image_path'   => 'dead_island.jpg',
            'publisher'    => 'Deep Silver',
            'developer'    => 'Techland',
            'age_rating'   => '18',
            'release_date' => '2016-05-31',
        ]);
        Game::factory()->create([
            'name'         => 'Elden Ring',
            'description'  => 'THE NEW FANTASY ACTION RPG. Rise, Tarnished, and be guided by grace to brandish the power of the Elden Ring and become an Elden Lord in the Lands Between.',
            'price'        => 69.90,
            'image_path'   => 'elden_ring.jpg',
            'publisher'    => 'FromSoftware Inc., BANDAI NAMCO',
            'developer'    => 'FromSoftware Inc.',
            'age_rating'   => '16',
            'release_date' => '2022-02-25',
        ]);
        Game::factory()->create([
            'name'         => 'Horizon Zero Dawn',
            'description'  => "Experience Aloy's legendary quest to unravel the mysteries of a future Earth ruled by Machines. Use devastating tactical attacks against your prey and explore a majestic open world in this award-winning action RPG!",
            'price'        => 52.90,
            'image_path'   => 'horizon_zero_dawn.jpg',
            'publisher'    => 'PlayStation PC LLC',
            'developer'    => 'Guerrilla',
            'age_rating'   => '16',
            'release_date' => '2020-08-07',
        ]);
        Game::factory()->create([
            'name'         => 'Risk of Rain 2',
            'description'  => 'Escape a chaotic alien planet by fighting through hordes of frenzied monsters - with your friends, or on your own. Combine loot in surprising ways and master each character until you become the havoc you feared upon your first crash landing.',
            'price'        => 25.00,
            'image_path'   => 'risk_of_rain_2.jpg',
            'publisher'    => 'Gearbox Publishing',
            'developer'    => 'Hopoo Games',
            'age_rating'   => 'T',
            'release_date' => '2020-08-11',
        ]);
        Game::factory()->create([
            'name'         => 'Red Dead Redemption 2',
            'description'  => 'RDR2 is the epic tale of outlaw Arthur Morgan and the infamous Van der Linde gang, on the run across America at the dawn of the modern age. Also includes access to the shared living world of Red Dead Online.',
            'price'        => 69.00,
            'image_path'   => 'red_dead_redemption_2.jpg',
            'publisher'    => 'Rockstar Games',
            'developer'    => 'Rockstar Games',
            'age_rating'   => '18',
            'release_date' => '2019-12-05',
        ]);
        Game::factory()->create([
            'name'         => 'Sea of Thieves',
            'description'  => 'Sea of Thieves offers the essential pirate experience, from sailing and fighting to exploring and looting - everything you need to live the pirate life and become a legend in your own right.',
            'price'        => 49.00,
            'image_path'   => 'sea_of_thieves.jpg',
            'publisher'    => 'Xbox Game Studios',
            'developer'    => 'Rare Ltd',
            'age_rating'   => '12',
            'release_date' => '2020-06-03',
        ]);
        Game::factory()->create([
            'name'         => 'Total War: WARHAMMER II',
            'description'  => 'Strategy gaming perfected. A breath-taking campaign of exploration, expansion and conquest across a fantasy world. Turn-based civilisation management and real-time epic strategy battles with thousands of troops and monsters at your command.',
            'price'        => 61.00,
            'image_path'   => 'total_war_warhammer_ii.jpg',
            'publisher'    => 'SEGA, Feral Interactive (Mac), Feral Interactive (Linux)',
            'developer'    => 'CREATIVE ASSEMBLY, Feral Interactive (Mac), Feral Interactive (Linux)',
            'age_rating'   => '16',
            'release_date' => '2017-09-28',
        ]);
        Game::factory()->create([
            'name'         => 'Pathfinder: Wrath of the Righteous',
            'description'  => 'Embark on a journey to a realm overrun by demons in a new epic RPG. Explore the nature of good and evil, learn the true cost of power, and rise as a Mythic Hero capable of deeds beyond mortal expectations.',
            'price'        => 54.99,
            'image_path'   => 'pathfinder_wrath_of_the_righteous.jpg',
            'publisher'    => 'META Publishing, Owlcat Games',
            'developer'    => 'Owlcat Games',
            'age_rating'   => 'M',
            'release_date' => '2021-09-02',
        ]);
        Game::factory()->create([
            'name'         => "Sid Meier's Civilization VI",
            'description'  => "Civilization VI offers new ways to interact with your world, expand your empire across the map, advance your culture, and compete against history\'s greatest leaders to build a civilization that will stand the test of time. Play as one of 20 historical leaders including Roosevelt (America) and Victoria (England).",
            'price'        => 69.95,
            'image_path'   => 'sid_meiers_civilization_vi.jpg',
            'publisher'    => '2K, Aspyr (Mac), Aspyr (Linux)',
            'developer'    => 'Firaxis Games, Aspyr (Mac), Aspyr (Linux)',
            'age_rating'   => '12',
            'release_date' => '2016-10-21',
        ]);
    }
}
