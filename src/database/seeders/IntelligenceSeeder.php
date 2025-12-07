<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\General\Intelligence;
use App\Enums\Generals\Intelligences;

class IntelligenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Intelligences::cases() as $enum) {
            Intelligence::updateOrCreate(
                ['intelligence' => $enum->value]
            );
        }
    }
}
