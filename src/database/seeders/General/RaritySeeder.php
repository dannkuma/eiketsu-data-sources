<?php

namespace Database\Seeders\General;

use App\Enums\Rarities;
use App\Models\Rarity;
use Illuminate\Database\Seeder;

class RaritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Rarities::cases() as $enum) {
            Rarity::updateOrCreate(
                ['rarity' => $enum->value],
                ['rarity' => $enum->value]
            );
        }
    }
}
