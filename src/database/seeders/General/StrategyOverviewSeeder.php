<?php

namespace Database\Seeders\General;

use App\Models\General\StrategyOverview;
use Illuminate\Database\Seeder;

class StrategyOverviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StrategyOverview::updateOrCreate(
            ['strategy_overview' => '蒼の味方の武力と知力が上がる。'],
            ['strategy_overview' => '蒼の味方の武力と知力が上がる。']
        );
    }
}
