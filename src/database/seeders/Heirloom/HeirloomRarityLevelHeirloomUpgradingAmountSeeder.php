<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomUpgradingAmounts;
use App\Enums\Heirlooms\Levels;
use App\Enums\Rarities;
use App\Models\Heirloom\Heirloom;
use App\Models\Heirloom\HeirloomRarityLevelHeirloomUpgradingAmount;
use App\Models\Heirloom\HeirloomUpgradingAmount;
use App\Models\Heirloom\Level;
use App\Models\Rarity;
use Illuminate\Database\Seeder;

class HeirloomRarityLevelHeirloomUpgradingAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heirloomUpgradingAmounts = HeirloomUpgradingAmount::all();
        $heirlooms = Heirloom::all();
        $levels = Level::all();
        $rarities = Rarity::all();
        $heirloomRarityLevelHeirloomUpgradingAmounts = [];
        $rareId = $rarities->firstWhere('rarity', Rarities::R->value)->id;
        $superRareId = $rarities->firstWhere('rarity', Rarities::SR->value)->id;
        $levelTwoId = $levels->firstWhere('level', Levels::Two->value)->id;
        $levelMaxId = $levels->firstWhere('level', Levels::Five->value)->id;
        $levelsRange = [Levels::Two->value, Levels::Three->value, Levels::Four->value];

        foreach ($heirlooms as $heirloom) {
            foreach ($levels as $level) {
                if ($heirloom->rarity_id === $rareId && $level->id === $levelTwoId) {
                    $heirloomUpgradingAmountValue = HeirloomUpgradingAmounts::OneHundred->value;
                } elseif ($heirloom->rarity_id === $superRareId && in_array($level->level, $levelsRange)) {
                    $heirloomUpgradingAmountValue = HeirloomUpgradingAmounts::FiveHundred->value;
                } elseif ($heirloom->rarity_id === $superRareId && $level->id === $levelMaxId) {
                    $heirloomUpgradingAmountValue = HeirloomUpgradingAmounts::FiveThousand->value;
                } else {
                    continue; // 上記以外はスキップ
                }
                $heirloomRarityLevelHeirloomUpgradingAmounts[] = [
                    'rarity_id' => $heirloom->rarity_id,
                    'level_id' => $level->id,
                    'heirloom_upgrading_amount_id' => $heirloomUpgradingAmounts->firstWhere('heirloom_upgrading_amount', $heirloomUpgradingAmountValue)->id,
                    'heirloom_id' => $heirloom->id,
                ];
            }
        }

        HeirloomRarityLevelHeirloomUpgradingAmount::upsert(
            $heirloomRarityLevelHeirloomUpgradingAmounts,
            ['rarity_id', 'level_id', 'heirloom_upgrading_amount_id', 'heirloom_id'],
            []
        );
    }
}
