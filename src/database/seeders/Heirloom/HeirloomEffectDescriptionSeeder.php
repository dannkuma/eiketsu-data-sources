<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomEffectDescriptions;
use App\Models\Heirloom\HeirloomEffectDescription;
use Illuminate\Database\Seeder;

class HeirloomEffectDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomEffectDescriptions::cases() as $enum) {
            HeirloomEffectDescription::updateOrCreate(
                ['heirloom_effect_description' => $enum->value],
                ['heirloom_effect_description' => $enum->value]
            );
        }
    }
}
