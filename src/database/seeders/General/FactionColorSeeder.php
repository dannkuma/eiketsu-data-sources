<?php

namespace Database\Seeders\General;

use App\Enums\Generals\FactionColors;
use App\Models\General\FactionColor;
use Illuminate\Database\Seeder;

class FactionColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (FactionColors::cases() as $enum) {
            FactionColor::updateOrCreate(
                ['faction_color' => $enum->value],
                ['faction_color' => $enum->value]
            );
        }
    }
}
