<?php

namespace Database\Seeders\Soul;

use App\Enums\Souls\SoulEffectCategories;
use App\Models\Soul\SoulEffectCategory;
use Illuminate\Database\Seeder;

class SoulEffectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (SoulEffectCategories::cases() as $enum) {
            SoulEffectCategory::updateOrCreate(
                ['soul_effect_category' => $enum->value]
            );
        }
    }
}
