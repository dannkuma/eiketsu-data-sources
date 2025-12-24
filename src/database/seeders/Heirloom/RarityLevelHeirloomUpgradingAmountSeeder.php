<?php

namespace Database\Seeders\Heirloom;

use App\Models\Heirloom\HeirloomUpgradingAmount;
use App\Models\Heirloom\Level;
use App\Models\Heirloom\RarityLevelHeirloomUpgradingAmount;
use App\Models\Rarity;
use Illuminate\Database\Seeder;

class RarityLevelHeirloomUpgradingAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rarity = Rarity::where('rarity', 'SR')->first();
        $level = Level::where('level', 1)->first();
        $heirloomUpgradingAmount = HeirloomUpgradingAmount::where('heirloom_upgrading_amount', 500)->first();
        RarityLevelHeirloomUpgradingAmount::updateOrCreate(
            [
                'rarity_id' => $rarity->id,
                'level_id' => $level->id,
                'heirloom_upgrading_amount_id' => $heirloomUpgradingAmount->id,
            ],
            [
                'rarity_id' => $rarity->id,
                'level_id' => $level->id,
                'heirloom_upgrading_amount_id' => $heirloomUpgradingAmount->id,
            ]);
    }
}
