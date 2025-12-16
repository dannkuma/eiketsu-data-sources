<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\General\General;
use App\Models\General\StrategyCategory;

class GeneralStrategyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generalId = General::where('name', '織田信長')->value('id');
        DB::table('general_strategy_categories')->insert([
            'general_id' => $generalId,
            'strategy_category_id' => StrategyCategory::where('strategy_category', 'all-strengthen')->value('id'),
        ]);
        DB::table('general_strategy_categories')->insert([
            'general_id' => $generalId,
            'strategy_category_id' => StrategyCategory::where('strategy_category', 'heal')->value('id'),
        ]);
    }
}
