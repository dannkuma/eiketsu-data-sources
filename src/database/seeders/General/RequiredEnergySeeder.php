<?php

namespace Database\Seeders\General;

use App\Enums\Generals\RequiredEnergies;
use App\Models\General\RequiredEnergy;
use Illuminate\Database\Seeder;

class RequiredEnergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (RequiredEnergies::cases() as $enum) {
            RequiredEnergy::updateOrCreate(
                ['required_energy' => $enum->value],
                ['required_energy' => $enum->value]
            );
        }
    }
}
