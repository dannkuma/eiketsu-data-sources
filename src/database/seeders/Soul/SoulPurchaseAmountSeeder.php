<?php

namespace Database\Seeders\Soul;

use App\Enums\Souls\SoulPurchaseAmounts;
use App\Models\Soul\SoulPurchaseAmount;
use Illuminate\Database\Seeder;

class SoulPurchaseAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (SoulPurchaseAmounts::cases() as $enum) {
            SoulPurchaseAmount::updateOrCreate(
                ['soul_purchase_amount' => $enum->value]
            );
        }
    }
}
