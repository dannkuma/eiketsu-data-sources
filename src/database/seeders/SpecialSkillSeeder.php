<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SpecialSkill;
use App\Enums\SpecialSkills;

class SpecialSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (SpecialSkills::cases() as $enum) {
            SpecialSkill::updateOrCreate(
                ['special_skill' => $enum->value]
            );
        }
    }
}
