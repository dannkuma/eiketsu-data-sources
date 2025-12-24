<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomEffectOperators;
use App\Models\Heirloom\HeirloomEffectOperator;
use Illuminate\Database\Seeder;

class HeirloomEffectOperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomEffectOperators::cases() as $enum) {
            HeirloomEffectOperator::updateOrCreate(
                ['heirloom_effect_operator' => $enum->value],
                ['heirloom_effect_operator' => $enum->value]
            );
        }
    }
}
