<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GameSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(GameGenreSeeder::class);
        /*\App\Models\User::truncate();
        \App\Models\User::factory()->create([
            'name' => 'test',
            'email' => 'test@example.com',
            'password' => password_hash('test', PASSWORD_DEFAULT)
        ]);*/
    }
}
