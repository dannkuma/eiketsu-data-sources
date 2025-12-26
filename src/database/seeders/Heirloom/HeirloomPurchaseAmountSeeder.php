<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomPurchaseAmounts;
use App\Models\Heirloom\HeirloomPurchaseAmount;
use Illuminate\Database\Seeder;

class HeirloomPurchaseAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomPurchaseAmounts::cases() as $enum) {
            HeirloomPurchaseAmount::updateOrCreate(
                ['heirloom_purchase_amount' => $enum->value],
                ['heirloom_purchase_amount' => $enum->value]
            );
        }
    }
}
