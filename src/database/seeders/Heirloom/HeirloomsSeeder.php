<?php

namespace Database\Seeders\Heirloom;

use Illuminate\Database\Seeder;

class HeirloomsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            HeirloomSoulClassificationSeeder::class,
            LevelSeeder::class,
            HeirloomSeeder::class,
            HeirloomPurchaseAmountSeeder::class,
            HeirloomRarityHeirloomPurchaseAmountSeeder::class,
            HeirloomSaleAmountSeeder::class,
            HeirloomRarityHeirloomSaleAmountSeeder::class,
            HeirloomUpgradingAmountSeeder::class,
            HeirloomRarityLevelHeirloomUpgradingAmountSeeder::class,
            HeirloomEffectDescriptionSeeder::class,
            HeirloomEffectCategorySeeder::class,
            ActivationConditionSeeder::class,
            EffectTargetSeeder::class,
            HeirloomEffectSummarySeeder::class,
            HeirloomEffectOperatorSeeder::class,
            HeirloomValueSeeder::class,
            HeirloomEffectUnitSeeder::class,
            HeirloomEffectSeeder::class,
            HeirloomEnhancementTypeSeeder::class,
            HeirloomEffectDetailSeeder::class,
            HeirloomEffectSummaryMappingSeeder::class,
        ]);
    }
}
