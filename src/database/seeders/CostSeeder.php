<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\Costs;
use App\Models\Cost;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Costs::cases() as $enum) {
            Cost::updateOrCreate(
                ['cost' => $enum->value]
            );
        }
    }
}
