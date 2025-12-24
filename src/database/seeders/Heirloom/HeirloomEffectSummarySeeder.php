<?php

namespace Database\Seeders\Heirloom;

use App\Models\Heirloom\ActivationCondition;
use App\Models\Heirloom\EffectTarget;
use App\Models\Heirloom\Heirloom;
use App\Models\Heirloom\HeirloomEffectCategory;
use App\Models\Heirloom\HeirloomEffectDescription;
use App\Models\Heirloom\HeirloomEffectSummary;
use Illuminate\Database\Seeder;

class HeirloomEffectSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heirloom = Heirloom::first();
        $heirloomEffectDescriptions = HeirloomEffectDescription::first();
        $heirloomEffectCategory = HeirloomEffectCategory::first();
        $activationCondition = ActivationCondition::first();
        $effectTarget = EffectTarget::first();
        HeirloomEffectSummary::updateOrCreate(
            [
                'heirloom_id' => $heirloom->id,
                'heirloom_effect_description_id' => $heirloomEffectDescriptions->id,
                'heirloom_effect_category_id' => $heirloomEffectCategory->id,
                'activation_condition_id' => $activationCondition->id,
                'effect_target_id' => $effectTarget->id,
                'effect_classification' => 0,
            ],
            [
                'heirloom_id' => $heirloom->id,
                'heirloom_effect_description_id' => $heirloomEffectDescriptions->id,
                'heirloom_effect_category_id' => $heirloomEffectCategory->id,
                'activation_condition_id' => $activationCondition->id,
                'effect_target_id' => $effectTarget->id,
                'effect_classification' => 0,
            ]
        );
    }
}
