<?php

namespace Database\Seeders\Heirloom;

use App\Models\Heirloom\Heirloom;
use App\Models\Heirloom\HeirloomSoulClassification;
use App\Models\Heirloom\RarityHeirloomPurchaseAmount;
use App\Models\Heirloom\RarityLevelHeirloomSaleAmount;
use App\Models\Heirloom\RarityLevelHeirloomUpgradingAmount;
use App\Models\Rarity;
use Illuminate\Database\Seeder;

class HeirloomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rarity = Rarity::where('rarity', 'SR')->first();
        $heirloomSoulClassification = HeirloomSoulClassification::where('heirloom_soul_classification', 'treasure')->first();
        $rarityHeirloomPurchaseAmount = RarityHeirloomPurchaseAmount::first();
        $rarityLevelHeirloomSaleAmount = RarityLevelHeirloomSaleAmount::first();
        $rarityLevelHeirloomUpgradingAmount = RarityLevelHeirloomUpgradingAmount::first();
        Heirloom::updateOrCreate(
            [
                'rarity_id' => $rarity->id,
                'heirloom_soul_classification_id' => $heirloomSoulClassification->id,
                'rarity_heirloom_purchase_amount_id' => $rarityHeirloomPurchaseAmount->id,
                'rarity_level_heirloom_sale_amount_id' => $rarityLevelHeirloomSaleAmount->id,
                'rarity_level_heirloom_upgrading_amount_id' => $rarityLevelHeirloomUpgradingAmount->id,
            ], [
                'name' => '曜変天目茶碗',
                'name_furigana' => 'ようへんてんもくちゃわん',
            ]
        );
    }
}
