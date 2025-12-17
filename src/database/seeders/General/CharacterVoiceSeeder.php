<?php

namespace Database\Seeders\General;

use App\Models\General\CharacterVoice;
use Illuminate\Database\Seeder;

class CharacterVoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CharacterVoice::updateOrCreate(
            ['character_voice' => '子安武人'],
            ['character_voice' => '子安武人']
        );
    }
}
