<?php

namespace Database\Seeders\Soul;

use App\Enums\Souls\SoulEffectUnits;
use App\Models\Soul\SoulEffectUnit;
use Illuminate\Database\Seeder;

class SoulEffectUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (SoulEffectUnits::cases() as $enum) {
            SoulEffectUnit::updateOrCreate(
                ['soul_effect_unit' => $enum->value],
                []
            );
        }
    }
}
