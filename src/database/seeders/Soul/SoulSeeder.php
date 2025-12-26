<?php

namespace Database\Seeders\Soul;

use App\Models\Heirloom\HeirloomSoulClassification;
use App\Models\Rarity;
use App\Models\Soul\Soul;
use App\Models\Soul\SoulPurchaseAmount;
use App\Models\Soul\SoulSaleAmount;
use Illuminate\Database\Seeder;

class SoulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heirloomSoulClassifications = HeirloomSoulClassification::first();
        $rarity = Rarity::first();
        $soulPurchaseAmount = SoulPurchaseAmount::first();
        $soulSaleAmount = SoulSaleAmount::first();
        Soul::updateOrCreate(
            [
                'heirloom_soul_classification_id' => $heirloomSoulClassifications->id,
                'rarity_id' => $rarity->id,
                'soul_purchase_amount_id' => $soulPurchaseAmount->id,
                'soul_sale_amount_id' => $soulSaleAmount->id,
            ],
            [
                'soul_name' => '宝物用英魂',
            ]
        );
    }
}
