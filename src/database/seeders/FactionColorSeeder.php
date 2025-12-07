<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\Generals\FactionColors;
use App\Models\General\FactionColor;

class FactionColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (FactionColors::cases() as $enum) {
            FactionColor::updateOrCreate(
                ['faction_color' => $enum->value]
            );
        }
    }
}
