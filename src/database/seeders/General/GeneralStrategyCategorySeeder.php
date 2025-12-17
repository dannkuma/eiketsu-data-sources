<?php

namespace Database\Seeders\General;

use App\Models\General\General;
use App\Models\General\StrategyCategory;
use Illuminate\Database\Seeder;

class GeneralStrategyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $general = General::where('name', '織田信長')->first();
        $general->strategyCategories()->syncWithoutDetaching([
            StrategyCategory::where('strategy_category', 'all-strengthen')->value('id'),
            StrategyCategory::where('strategy_category', 'heal')->value('id'),
        ]);
    }
}
