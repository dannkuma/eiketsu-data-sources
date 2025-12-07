<?php

namespace Database\Seeders\General;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\Generals\Costs;
use App\Models\General\Cost;

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
