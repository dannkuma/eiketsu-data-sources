<?php

namespace Database\Seeders\Soul;

use App\Models\Heirloom\HeirloomEnhancementType;
use App\Models\Soul\SoulEffect;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\AssignOp\Pow;

class SoulsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            SoulPurchaseAmountSeeder::class,
            SoulSaleAmountSeeder::class,
            // SoulEffectSeeder::class,
            SoulEffectCategorySeeder::class,
            SoulEffectOperatorSeeder::class,
            SoulValueSeeder::class,
            SoulEffectUnitSeeder::class,
        ]);
    }
}
