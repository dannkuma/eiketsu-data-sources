<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomEffectCategories;
use App\Models\Heirloom\HeirloomEffectCategory;
use Illuminate\Database\Seeder;

class HeirloomEffectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomEffectCategories::cases() as $enum) {
            HeirloomEffectCategory::updateOrCreate(
                ['heirloom_effect_category' => $enum->value]
            );
        }
    }
}
