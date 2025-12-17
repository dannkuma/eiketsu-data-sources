<?php

namespace Database\Seeders\General;

use App\Enums\Generals\Costs;
use App\Models\General\Cost;
use Illuminate\Database\Seeder;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Costs::cases() as $enum) {
            Cost::updateOrCreate(
                ['cost' => $enum->value],
                ['cost' => $enum->value]
            );
        }
    }
}
