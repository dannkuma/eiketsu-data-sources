<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use App\Models\General\General;
use App\Models\General\StrategyCategory;

class GeneralStrategyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $general = General::where('name', '織田信長')->first();
        $general->strategyCategories()->attach([
            StrategyCategory::where('strategy_category', 'all-strengthen')->value('id'),
            StrategyCategory::where('strategy_category', 'heal')->value('id'),
        ]);
    }
}
