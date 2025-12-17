<?php

namespace Database\Seeders\General;

use App\Enums\Generals\StrategyEffectTimes;
use App\Models\General\StrategyEffectTime;
use Illuminate\Database\Seeder;

class StrategyEffectTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (StrategyEffectTimes::cases() as $enum) {
            StrategyEffectTime::updateOrCreate(
                ['strategy_effect_time' => $enum->value]
            );
        }
    }
}
