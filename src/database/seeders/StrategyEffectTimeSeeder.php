<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\Generals\StrategyEffectTimes;
use App\Models\StrategyEffectTime;

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
