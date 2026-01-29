<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomPurchaseAmounts;
use App\Enums\Rarities;
use App\Models\Heirloom\Heirloom;
use App\Models\Heirloom\HeirloomPurchaseAmount;
use App\Models\Heirloom\HeirloomRarityHeirloomPurchaseAmount;
use App\Models\Rarity;
use Illuminate\Database\Seeder;

class HeirloomRarityHeirloomPurchaseAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heirloomPurchaseAmounts = HeirloomPurchaseAmount::all();
        $heirlooms = Heirloom::all();
        $heirloomRarityHeirloomPurchaseAmounts = [];

        // レアリティのIDはループ外で取得しておく
        $normalRarityId = Rarity::firstWhere('rarity', Rarities::N->value)->id;
        $rareRarityId = Rarity::firstWhere('rarity', Rarities::R->value)->id;

        foreach ($heirlooms as $heirloom) {
            // レアリティに対応する金額を設定
            if ($heirloom->rarity_id === $normalRarityId) {
                $heirloomPurchaseAmountValue = HeirloomPurchaseAmounts::Ten->value;
            } elseif ($heirloom->rarity_id === $rareRarityId) {
                $heirloomPurchaseAmountValue = HeirloomPurchaseAmounts::OneHundred->value;
            } else {
                $heirloomPurchaseAmountValue = HeirloomPurchaseAmounts::FiveHundred->value;
            }
            $heirloomRarityHeirloomPurchaseAmounts[] = [
                'rarity_id' => $heirloom->rarity_id,
                'heirloom_purchase_amount_id' => $heirloomPurchaseAmounts->firstWhere('heirloom_purchase_amount', $heirloomPurchaseAmountValue)->id,
                'heirloom_id' => $heirloom->id,
            ];
        }

        HeirloomRarityHeirloomPurchaseAmount::upsert(
            $heirloomRarityHeirloomPurchaseAmounts,
            ['rarity_id', 'heirloom_purchase_amount_id', 'heirloom_id'],
            []
        );
    }
}
