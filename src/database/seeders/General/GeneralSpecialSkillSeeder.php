<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\General\General;
use App\Models\General\SpecialSkill;

class GeneralSpecialSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generalId = General::where('name', '織田信長')->value('id');
        DB::table('general_special_skills')->insert([
            'general_id' => $generalId,
            'special_skill_id' => SpecialSkill::where('special_skill', 'snipe')->value('id'),
        ]);
        DB::table('general_special_skills')->insert([
            'general_id' => $generalId,
            'special_skill_id' => SpecialSkill::where('special_skill', 'exaltation')->value('id'),
        ]);
    }
}
