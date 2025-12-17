<?php

namespace Database\Seeders\General;

use App\Enums\Generals\Intelligences;
use App\Models\General\Intelligence;
use Illuminate\Database\Seeder;

class IntelligenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Intelligences::cases() as $enum) {
            Intelligence::updateOrCreate(
                ['intelligence' => $enum->value],
                ['intelligence' => $enum->value]
            );
        }
    }
}
