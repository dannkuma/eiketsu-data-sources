<?php

namespace Database\Seeders\Heirloom;

use App\Models\Heirloom\HeirloomSaleAmount;
use App\Models\Heirloom\RarityHeirloomSaleAmount;
use App\Models\Rarity;
use Illuminate\Database\Seeder;

class RarityHeirloomSaleAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rarity = Rarity::where('rarity', 'SR')->first();
        $heirloomSaleAmount = HeirloomSaleAmount::where('heirloom_sale_amount', 5)->first();
        RarityHeirloomSaleAmount::updateOrCreate(
            [
                'rarity_id' => $rarity->id,
                'heirloom_sale_amount_id' => $heirloomSaleAmount->id,
            ],
            []
        );
    }
}
