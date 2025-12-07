<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\Generals\UnitTypes;
use App\Models\UnitType;

class UnitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (UnitTypes::cases() as $enum) {
            UnitType::updateOrCreate(
                ['unit_type' => $enum->value]
            );
        }
    }
}
