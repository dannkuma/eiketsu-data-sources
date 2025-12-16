<?php

namespace Database\Seeders\Heirloom;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heirloom\HeirloomUpgradingAmount;
use App\Enums\Heirlooms\HeirloomUpgradingAmounts;

class HeirloomUpgradingAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomUpgradingAmounts::cases() as $enum) {
            HeirloomUpgradingAmount::updateOrCreate(
                ['heirloom_upgrading_amount' => $enum->value]
            );
        }
    }
}
