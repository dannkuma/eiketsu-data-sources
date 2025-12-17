<?php

namespace Database\Seeders\General;

use App\Enums\Generals\StrategyCategories;
use App\Models\General\StrategyCategory;
use Illuminate\Database\Seeder;

class StrategyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (StrategyCategories::cases() as $enum) {
            StrategyCategory::updateOrCreate(
                ['strategy_category' => $enum->value],
                ['strategy_category' => $enum->value]
            );
        }
    }
}
