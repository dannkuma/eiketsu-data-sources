<?php

namespace Database\Seeders\Heirloom;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heirloom\EffectTarget;
use App\Enums\Heirlooms\EffectTargets;

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
