<?php

namespace Database\Seeders\Heirloom;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heirloom\HeirloomEffectDescription;
use App\Enums\Heirlooms\HeirloomEffectDescriptions;

class HeirloomEffectDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomEffectDescriptions::cases() as $enum) {
            HeirloomEffectDescription::updateOrCreate(
                ['heirloom_effect_description' => $enum->value]
            );
        }
    }
}
