<?php

namespace Database\Seeders\Heirloom;

use App\Models\Heirloom\HeirloomSaleAmount;
use App\Models\Heirloom\Level;
use App\Models\Heirloom\RarityLevelHeirloomSaleAmount;
use App\Models\Rarity;
use Illuminate\Database\Seeder;

class RarityLevelHeirloomSaleAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rarity = Rarity::where('rarity', 'SR')->first();
        $level = Level::where('level', 1)->first();
        $heirloomSaleAmount = HeirloomSaleAmount::where('heirloom_sale_amount', 5)->first();
        RarityLevelHeirloomSaleAmount::updateOrCreate(
            [
                'rarity_id' => $rarity->id,
                'level_id' => $level->id,
                'heirloom_sale_amount_id' => $heirloomSaleAmount->id,
            ],
            [
                'rarity_id' => $rarity->id,
                'level_id' => $level->id,
                'heirloom_sale_amount_id' => $heirloomSaleAmount->id,
            ]
        );
    }
}
