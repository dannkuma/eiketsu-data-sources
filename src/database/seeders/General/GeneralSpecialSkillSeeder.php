<?php

namespace Database\Seeders\General;

use App\Models\General\General;
use App\Models\General\SpecialSkill;
use Illuminate\Database\Seeder;

class GeneralSpecialSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $general = General::where('name', '織田信長')->first();
        $specialSkillIds = [
            SpecialSkill::where('special_skill', 'snipe')->value('id'),
            SpecialSkill::where('special_skill', 'exaltation')->value('id'),
        ];
        $general->specialSkills()->syncWithoutDetaching($specialSkillIds);
    }
}
