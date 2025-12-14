<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;

class GeneralsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            FactionColorSeeder::class,
            ReleaseSetSeeder::class,
            CardTypeSeeder::class,
            RaritySeeder::class,
            PeriodSeeder::class,
            UnitTypeSeeder::class,
            CostSeeder::class,
            PowerSeeder::class,
            IntelligenceSeeder::class,
            StrategyNameSeeder::class,
            StrategyNameFuriganaSeeder::class,
            RequiredEnergySeeder::class,
            StrategyEffectTimeSeeder::class,
            // StrategyOverviewSeeder::class,
            // IllustrationSeeder::class,
            // CharacterVoiceSeeder::class,
            EffectRangeSeeder::class,
            // GeneralSeeder::class,
            // GeneralGetMethodSeeder::class,
            // GeneralSpecialSkillSeeder::class,
            // GeneralStrategyCategoriesSeeder::class,
        ]);
    }
}
