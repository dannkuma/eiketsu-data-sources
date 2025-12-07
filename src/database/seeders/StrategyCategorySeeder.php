<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\StrategyCategories;
use App\Models\StrategyCategory;

class StrategyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (StrategyCategories::cases() as $enum) {
            StrategyCategory::updateOrCreate(
                ['strategy_category' => $enum->value]
            );
        }
    }
}
