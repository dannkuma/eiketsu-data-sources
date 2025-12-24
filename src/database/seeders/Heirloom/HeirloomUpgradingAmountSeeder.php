<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomUpgradingAmounts;
use App\Models\Heirloom\HeirloomUpgradingAmount;
use Illuminate\Database\Seeder;

class HeirloomUpgradingAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HeirloomUpgradingAmounts::cases() as $enum) {
            HeirloomUpgradingAmount::updateOrCreate(
                ['heirloom_upgrading_amount' => $enum->value],
                ['heirloom_upgrading_amount' => $enum->value]
            );
        }
    }
}
