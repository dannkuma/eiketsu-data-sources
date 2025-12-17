<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\EffectTargets;
use App\Models\Heirloom\EffectTarget;
use Illuminate\Database\Seeder;

class EffectTargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (EffectTargets::cases() as $enum) {
            EffectTarget::updateOrCreate(
                ['effect_target' => $enum->value]
            );
        }
    }
}
