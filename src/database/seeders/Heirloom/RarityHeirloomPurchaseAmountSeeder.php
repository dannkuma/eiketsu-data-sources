<?php

namespace Database\Seeders\Heirloom;

use App\Models\Heirloom\HeirloomPurchaseAmount;
use App\Models\Heirloom\RarityHeirloomPurchaseAmount;
use App\Models\Rarity;
use Illuminate\Database\Seeder;

class RarityHeirloomPurchaseAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rarity = Rarity::where('rarity', 'SR')->first();
        $heirloomPurchaseAmount = HeirloomPurchaseAmount::where('heirloom_purchase_amount', 10)->first();
        RarityHeirloomPurchaseAmount::updateOrCreate(
            [
                'rarity_id' => $rarity->id,
                'heirloom_purchase_amount_id' => $heirloomPurchaseAmount->id,
            ],
            [
                'rarity_id' => $rarity->id,
                'heirloom_purchase_amount_id' => $heirloomPurchaseAmount->id,
            ]
        );
    }
}
