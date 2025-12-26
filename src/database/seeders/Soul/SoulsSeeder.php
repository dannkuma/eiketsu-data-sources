<?php

namespace Database\Seeders\Soul;

use Illuminate\Database\Seeder;

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
            SoulSeeder::class,
            SoulEffectCategorySeeder::class,
            SoulEffectOperatorSeeder::class,
            SoulValueSeeder::class,
            SoulEffectUnitSeeder::class,
            SoulEffectSeeder::class,
            SoulInitialEffectSeeder::class,
            SoulUserSeeder::class,
            SoulUserEffectSeeder::class,
        ]);
    }
}
