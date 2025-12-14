<?php

namespace Database\Seeders\Soul;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Soul\SoulEffectUnit;
use App\Enums\Souls\SoulEffectUnits;

class SoulEffectUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (SoulEffectUnits::cases() as $enum) {
            SoulEffectUnit::updateOrCreate(
                ['soul_effect_unit' => $enum->value]
            );
        }
    }
}
