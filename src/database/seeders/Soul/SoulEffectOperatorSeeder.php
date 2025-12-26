<?php

namespace Database\Seeders\Soul;

use App\Enums\Souls\SoulEffectOperators;
use App\Models\Soul\SoulEffectOperator;
use Illuminate\Database\Seeder;

class SoulEffectOperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (SoulEffectOperators::cases() as $enum) {
            SoulEffectOperator::updateOrCreate(
                ['soul_effect_operator' => $enum->value],
                []
            );
        }
    }
}
