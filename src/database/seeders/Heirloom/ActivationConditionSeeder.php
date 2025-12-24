<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\ActivationConditions;
use App\Models\Heirloom\ActivationCondition;
use Illuminate\Database\Seeder;

class ActivationConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (ActivationConditions::cases() as $enum) {
            ActivationCondition::updateOrCreate(
                ['activation_condition' => $enum->value],
                ['activation_condition' => $enum->value]
            );
        }
    }
}
