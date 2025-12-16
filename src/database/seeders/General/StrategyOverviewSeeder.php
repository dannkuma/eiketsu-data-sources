<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use App\Models\General\StrategyOverview;

class StrategyOverviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StrategyOverview::create([
            'strategy_overview' => '蒼の味方の武力と知力が上がる。'
        ]);
    }
}
