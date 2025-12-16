<?php

namespace Database\Seeders\Heirloom;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heirloom\HeirloomEffectOperator;
use App\Enums\Heirlooms\HeirloomEffectOperators;

class HeirloomEffectOperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomEffectOperators::cases() as $enum) {
            HeirloomEffectOperator::updateOrCreate(
                ['heirloom_effect_operator' => $enum->value]
            );
        }
    }
}
