<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use App\Models\General\General;
use App\Models\General\FactionColor;
use App\Models\General\ReleaseSet;
use App\Models\General\CardType;
use App\Models\Rarity;
use App\Models\General\Period;
use App\Models\General\UnitType;
use App\Models\General\Cost;
use App\Models\General\Power;
use App\Models\General\Intelligence;
use App\Models\General\StrategyName;
use App\Models\General\StrategyNameFurigana;
use App\Models\General\RequiredEnergy;
use App\Models\General\StrategyEffectTime;
use App\Models\General\StrategyOverview;
use App\Models\General\Illustration;
use App\Models\General\CharacterVoice;
use App\Models\General\EffectRange;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        General::create([
            'name' => '織田信長',
            'name_furigana' => 'おだのぶなが',
            'faction_color_id' => FactionColor::where('faction_color', 'blue')->value('id'),
            'release_set_id' => ReleaseSet::where('release_set', 'd1-1')->value('id'),
            'card_type_id' => CardType::where('card_type', 'normal')->value('id'),
            'rarity_id' => Rarity::where('rarity', 'er')->value('id'),
            'period_id' => Period::where('period', 'sengoku')->value('id'),
            'unit_type_id' => UnitType::where('unit_type', 'gun-squad')->value('id'),
            'cost_id' => Cost::where('cost', 1.0)->value('id'),
            'power_id' => Power::where('power', 9)->value('id'),
            'intelligence_id' => Intelligence::where('intelligence', 9)->value('id'),
            'strategy_name_id' => StrategyName::where('strategy_name', '天下布武')->value('id'),
            'strategy_name_furigana_id' => StrategyNameFurigana::where('strategy_name_furigana', 'てんかふぶ')->value('id'),
            'required_energy_id' => RequiredEnergy::where('required_energy', 6)->value('id'),
            'strategy_effect_time_id' => StrategyEffectTime::where('strategy_effect_time', 'intellect-time')->value('id'),
            'strategy_overview_id' => StrategyOverview::where('strategy_overview', '蒼の味方の武力と知力が上がる。')->value('id'),
            'illustration_id' => Illustration::where('illustration', '獅子猿')->value('id'),
            'character_voice_id' => CharacterVoice::where('character_voice', '子安武人')->value('id'),
            'effect_range_id' => EffectRange::where('effect_range', 'all-buff-square')->value('id'),
        ]);
    }
}
