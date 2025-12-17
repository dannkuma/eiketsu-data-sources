<?php

namespace Database\Seeders\General;

use App\Models\General\StrategyNameFurigana;
use Illuminate\Database\Seeder;

class StrategyNameFuriganaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO: スクレイピング後に追加
        StrategyNameFurigana::updateOrCreate(
            ['strategy_name_furigana' => 'てんかふぶ'],
            ['strategy_name_furigana' => 'てんかふぶ']
        );
    }
}
