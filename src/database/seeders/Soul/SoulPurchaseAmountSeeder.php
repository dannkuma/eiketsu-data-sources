<?php

namespace Database\Seeders\Soul;

use Illuminate\Database\Seeder;
use App\Models\Soul\SoulPurchaseAmount;
use App\Enums\Souls\SoulPurchaseAmounts;

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
