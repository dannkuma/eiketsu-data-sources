<?php

namespace Database\Seeders\General;

use App\Enums\Generals\UnitTypes;
use App\Models\General\UnitType;
use Illuminate\Database\Seeder;

class UnitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (UnitTypes::cases() as $enum) {
            UnitType::updateOrCreate(
                ['unit_type' => $enum->value],
                ['unit_type' => $enum->value]
            );
        }
    }
}
