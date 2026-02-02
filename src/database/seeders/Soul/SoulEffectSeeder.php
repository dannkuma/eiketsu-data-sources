<?php

namespace Database\Seeders\Soul;

use App\Models\Soul\SoulEffect;
use Illuminate\Database\Seeder;

class SoulEffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $soulEffects = [
            [
                'soul_effect_category_id' => 1,
                'soul_effect_operator_id' => 1,
                'soul_value_id' => 4,
                'soul_effect_unit_id' => 2,
            ],
            [
                'soul_effect_category_id' => 2,
                'soul_effect_operator_id' => 1,
                'soul_value_id' => 4,
                'soul_effect_unit_id' => 2,
            ],
            [
                'soul_effect_category_id' => 3,
                'soul_effect_operator_id' => 1,
                'soul_value_id' => 1,
                'soul_effect_unit_id' => 2,
            ],
            [
                'soul_effect_category_id' => 4,
                'soul_effect_operator_id' => 2,
                'soul_value_id' => 6,
                'soul_effect_unit_id' => 2,
            ],
            [
                'soul_effect_category_id' => 5,
                'soul_effect_operator_id' => 1,
                'soul_value_id' => 7,
                'soul_effect_unit_id' => 2,
            ],
            [
                'soul_effect_category_id' => 6,
                'soul_effect_operator_id' => 1,
                'soul_value_id' => 4,
                'soul_effect_unit_id' => 2,
            ],
            [
                'soul_effect_category_id' => 7,
                'soul_effect_operator_id' => 1,
                'soul_value_id' => 4,
                'soul_effect_unit_id' => 2,
            ],
            [
                'soul_effect_category_id' => 8,
                'soul_effect_operator_id' => 1,
                'soul_value_id' => 4,
                'soul_effect_unit_id' => 2,
            ],
            [
                'soul_effect_category_id' => 1,
                'soul_effect_operator_id' => 1,
                'soul_value_id' => 8,
                'soul_effect_unit_id' => 2,
            ],
            [
                'soul_effect_category_id' => 11,
                'soul_effect_operator_id' => 2,
                'soul_value_id' => 4,
                'soul_effect_unit_id' => 1,
            ],
            [
                'soul_effect_category_id' => 11,
                'soul_effect_operator_id' => 1,
                'soul_value_id' => 4,
                'soul_effect_unit_id' => 1,
            ],
            [
                'soul_effect_category_id' => 9,
                'soul_effect_operator_id' => 1,
                'soul_value_id' => 2,
                'soul_effect_unit_id' => null,
            ],
            [
                'soul_effect_category_id' => 10,
                'soul_effect_operator_id' => 1,
                'soul_value_id' => 3,
                'soul_effect_unit_id' => null,
            ],
        ];

        SoulEffect::upsert(
            $soulEffects,
            ['soul_effect_category_id', 'soul_effect_operator_id', 'soul_value_id', 'soul_effect_unit_id'],
            []
        );
    }
}
