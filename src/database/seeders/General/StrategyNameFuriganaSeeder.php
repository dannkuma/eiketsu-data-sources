<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\General\StrategyNameFurigana;

class StrategyNameFuriganaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO: スクレイピング後に追加
        StrategyNameFurigana::create(['strategy_name_furigana' => 'てんかふぶ']);
    }
}
