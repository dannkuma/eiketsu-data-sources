<?php

namespace Database\Seeders\Heirloom;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heirloom\HeirloomEffectCategory;
use App\Enums\Heirlooms\HeirloomEffectCategories;

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
