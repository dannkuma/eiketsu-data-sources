<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\RequiredEnergies;
use App\Models\RequiredEnergy;

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
