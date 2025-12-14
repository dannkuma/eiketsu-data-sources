<?php

namespace Database\Seeders\Soul;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Soul\SoulEffectOperator;
use App\Enums\Souls\SoulEffectOperators;

class SoulEffectOperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (SoulEffectOperators::cases() as $enum) {
            SoulEffectOperator::updateOrCreate(
                ['soul_effect_operator' => $enum->value]
            );
        }
    }
}
