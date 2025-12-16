<?php

namespace Database\Seeders\General;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\Generals\RequiredEnergies;
use App\Models\General\RequiredEnergy;

class RequiredEnergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (RequiredEnergies::cases() as $enum) {
            RequiredEnergy::updateOrCreate(
                ['required_energy' => $enum->value]
            );
        }
    }
}
