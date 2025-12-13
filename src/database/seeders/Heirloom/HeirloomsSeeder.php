<?php

namespace Database\Seeders\Heirloom;

use App\Models\Heirloom\HeirloomEnhancementType;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\AssignOp\Pow;

class HeirloomsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            HeirloomSoulClassificationSeeder::class,
            HeirloomPurchaseAmountSeeder::class,
            HeirloomSaleAmountSeeder::class,
            HeirloomUpgradingAmountSeeder::class,
            LevelSeeder::class,
            HeirloomEffectDescriptionSeeder::class,
            HeirloomEffectCategorySeeder::class,
            ActivationConditionSeeder::class,
            EffectTargetSeeder::class,
            // HeirloomEnhancementTypeSeeder::class,
            HeirloomEffectOperatorSeeder::class,
            // HeirloomValueSeeder::class,
            HeirloomEffectUnitSeeder::class,
        ]);
    }
}
