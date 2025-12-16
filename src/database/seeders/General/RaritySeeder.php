<?php

namespace Database\Seeders\General;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rarity;
use App\Enums\Rarities;

class RaritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Rarities::cases() as $enum) {
            Rarity::updateOrCreate(
                ['rarity' => $enum->value]
            );
        }
    }
}
