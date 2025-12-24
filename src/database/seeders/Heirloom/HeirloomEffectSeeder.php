<?php

namespace Database\Seeders\Heirloom;

use App\Models\Heirloom\HeirloomEffect;
use App\Models\Heirloom\HeirloomEffectCategory;
use App\Models\Heirloom\HeirloomEffectOperator;
use App\Models\Heirloom\HeirloomEffectUnit;
use App\Models\Heirloom\HeirloomValue;
use Illuminate\Database\Seeder;

class HeirloomEffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heirloomEffectCategory = HeirloomEffectCategory::first();
        $heirloomEffectOperator = HeirloomEffectOperator::first();
        $heirloomValue = HeirloomValue::first();
        $heirloomEffectUnit = HeirloomEffectUnit::first();
        HeirloomEffect::updateOrCreate(
            [
                'heirloom_effect_category_id' => $heirloomEffectCategory->id,
                'heirloom_effect_operator_id' => $heirloomEffectOperator->id,
                'heirloom_value_id' => $heirloomValue->id,
                'heirloom_effect_unit_id' => $heirloomEffectUnit->id,
            ],
            [
                'heirloom_effect_category_id' => $heirloomEffectCategory->id,
                'heirloom_effect_operator_id' => $heirloomEffectOperator->id,
                'heirloom_value_id' => $heirloomValue->id,
                'heirloom_effect_unit_id' => $heirloomEffectUnit->id,
            ]
        );
    }
}
