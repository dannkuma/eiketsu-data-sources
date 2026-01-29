<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomSaleAmounts;
use App\Enums\Rarities;
use App\Models\Heirloom\Heirloom;
use App\Models\Heirloom\HeirloomRarityHeirloomSaleAmount;
use App\Models\Heirloom\HeirloomSaleAmount;
use App\Models\Rarity;
use Illuminate\Database\Seeder;

class HeirloomRarityHeirloomSaleAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heirloomSaleAmounts = HeirloomSaleAmount::all();
        $heirlooms = Heirloom::all();
        $heirloomRarityHeirloomSaleAmounts = [];

        // レアリティのIDはループ外で取得しておく
        $normalRarityId = Rarity::firstWhere('rarity', Rarities::N->value)->id;
        $rareRarityId = Rarity::firstWhere('rarity', Rarities::R->value)->id;

        foreach ($heirlooms as $heirloom) {
            // レアリティに対応する金額を設定
            if ($heirloom->rarity_id === $normalRarityId) {
                $heirloomSaleAmountValue = HeirloomSaleAmounts::Five->value;
            } elseif ($heirloom->rarity_id === $rareRarityId) {
                $heirloomSaleAmountValue = HeirloomSaleAmounts::TwentyFive->value;
            } else {
                $heirloomSaleAmountValue = HeirloomSaleAmounts::TwoHundredFifty->value;
            }
            $heirloomRarityHeirloomSaleAmounts[] = [
                'rarity_id' => $heirloom->rarity_id,
                'heirloom_sale_amount_id' => $heirloomSaleAmounts->firstWhere('heirloom_sale_amount', $heirloomSaleAmountValue)->id,
                'heirloom_id' => $heirloom->id,
            ];
        }

        HeirloomRarityHeirloomSaleAmount::upsert(
            $heirloomRarityHeirloomSaleAmounts,
            ['rarity_id', 'heirloom_sale_amount_id', 'heirloom_id'],
            []
        );
    }
}
