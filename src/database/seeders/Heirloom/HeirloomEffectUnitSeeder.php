<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomEffectUnits;
use App\Models\Heirloom\HeirloomEffectUnit;
use Illuminate\Database\Seeder;

class HeirloomEffectUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomEffectUnits::cases() as $enum) {
            HeirloomEffectUnit::updateOrCreate(
                ['heirloom_effect_unit' => $enum->value],
                ['heirloom_effect_unit' => $enum->value]
            );
        }
    }
}
