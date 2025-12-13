<?php

namespace Database\Seeders\Heirloom;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heirloom\HeirloomEffectUnit;
use App\Enums\Heirlooms\HeirloomEffectUnits;

class HeirloomEffectUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomEffectUnits::cases() as $enum) {
            HeirloomEffectUnit::updateOrCreate(
                ['heirloom_effect_unit' => $enum->value]
            );
        }
    }
}
