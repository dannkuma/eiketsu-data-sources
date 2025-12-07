<?php

namespace Database\Seeders\General;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\Generals\Periods;
use App\Models\General\Period;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Periods::cases() as $enum) {
            Period::updateOrCreate(
                ['period' => $enum->value]
            );
        }
    }
}
