<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use App\Models\General\StrategyName;

class StrategyNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO: スクレイピング後に追加
        StrategyName::create(['strategy_name' => '天下布武']);
    }
}
