<?php

namespace Database\Seeders\Soul;

use App\Models\Soul\SoulEffect;
use App\Models\Soul\SoulEffectCategory;
use App\Models\Soul\SoulEffectOperator;
use App\Models\Soul\SoulEffectUnit;
use App\Models\Soul\SoulValue;
use Illuminate\Database\Seeder;

class SoulEffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO: スクレイピング後に追加
        $soulEffectCategory = SoulEffectCategory::first();
        $soulEffectOperator = SoulEffectOperator::first();
        $soulValue = SoulValue::first();
        $soulEffectUnit = SoulEffectUnit::first();
        SoulEffect::updateOrCreate(
            [
                'soul_effect_category_id' => $soulEffectCategory->id,
                'soul_effect_operator_id' => $soulEffectOperator->id,
                'soul_value_id' => $soulValue->id,
                'soul_effect_unit_id' => $soulEffectUnit->id,
            ],
            []
        );
    }
}
