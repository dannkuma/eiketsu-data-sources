<?php

namespace Database\Seeders\General;

use App\Enums\Generals\Periods;
use App\Models\General\Period;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Periods::cases() as $enum) {
            Period::updateOrCreate(
                ['period' => $enum->value],
                ['period' => $enum->value]
            );
        }
    }
}
