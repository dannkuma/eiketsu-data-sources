<?php

namespace Database\Seeders\Heirloom;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heirloom\HeirloomPurchaseAmount;
use App\Enums\Heirlooms\HeirloomPurchaseAmounts;

class HeirloomPurchaseAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomPurchaseAmounts::cases() as $enum) {
            HeirloomPurchaseAmount::updateOrCreate(
                ['heirloom_purchase_amount' => $enum->value]
            );
        }
    }
}

