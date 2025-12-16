<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\General\GeneralsSeeder;
use Database\Seeders\Heirloom\HeirloomsSeeder;
use Database\Seeders\Soul\SoulsSeeder;
use Database\Seeders\General\FavoriteSeeder;

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
        ]);
    }
}
