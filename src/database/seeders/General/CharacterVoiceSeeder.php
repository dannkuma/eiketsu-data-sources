<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use App\Models\General\CharacterVoice;

class CharacterVoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CharacterVoice::create(['character_voice' => '子安武人']);
    }
}
