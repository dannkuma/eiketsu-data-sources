<?php

namespace Database\Seeders\Heirloom;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heirloom\Level;
use App\Enums\Heirlooms\Levels;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Levels::cases() as $enum) {
            Level::updateOrCreate(
                ['level' => $enum->value]
            );
        }
    }
}
