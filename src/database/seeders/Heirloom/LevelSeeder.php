<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\Levels;
use App\Models\Heirloom\Level;
use Illuminate\Database\Seeder;

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
