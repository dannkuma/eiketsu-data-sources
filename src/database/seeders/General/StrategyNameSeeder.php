<?php

namespace Database\Seeders\General;

use App\Models\General\StrategyName;
use Illuminate\Database\Seeder;

class StrategyNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO: スクレイピング後に追加
        StrategyName::updateOrCreate(
            ['strategy_name' => '天下布武'],
            ['strategy_name' => '天下布武']
        );
    }
}
