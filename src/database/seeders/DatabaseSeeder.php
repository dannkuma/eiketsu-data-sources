<?php

namespace Database\Seeders;

use Database\Seeders\General\FavoriteSeeder;
use Database\Seeders\General\GeneralsSeeder;
use Database\Seeders\Heirloom\HeirloomsSeeder;
use Database\Seeders\Heirloom\HeirloomUserLevelSeeder;
use Database\Seeders\Soul\SoulsSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            GeneralsSeeder::class,
            FavoriteSeeder::class,
            HeirloomsSeeder::class,
            SoulsSeeder::class,
            HeirloomUserLevelSeeder::class,
        ]);
    }
}
