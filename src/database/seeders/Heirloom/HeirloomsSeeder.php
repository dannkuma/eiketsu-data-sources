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
            HeirloomPurchaseAmountSeeder::class,
            RarityHeirloomPurchaseAmountSeeder::class,
            HeirloomSaleAmountSeeder::class,
            RarityLevelHeirloomSaleAmountSeeder::class,
            HeirloomUpgradingAmountSeeder::class,
            RarityLevelHeirloomUpgradingAmountSeeder::class,
            HeirloomSeeder::class,
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
