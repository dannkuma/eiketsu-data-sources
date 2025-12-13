<?php

namespace Database\Seeders\Heirloom;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heirloom\ActivationCondition;
use App\Enums\Heirlooms\ActivationConditions;

class ActivationConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (ActivationConditions::cases() as $enum) {
            ActivationCondition::updateOrCreate(
                ['activation_condition' => $enum->value]
            );
        }
    }
}
