<?php

namespace Database\Seeders\Soul;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Soul\SoulEffectCategory;
use App\Enums\Souls\SoulEffectCategories;

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
