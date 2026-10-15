<?php

namespace App\Enums\Generals;

enum SpecialSkills: string
{
    case Ambush = 'ambush';         // 伏兵
    case Palisade = 'palisade';       // 防柵
    case Revival = 'revival';        // 復活
    case Shinobi = 'shinobi';        // 忍
    case Spirit = 'spirit';         // 気合
    case Snipe = 'snipe';          // 狙撃
    case Exaltation = 'exaltation';     // 昂揚
    case Technique = 'technique';      // 技巧
    case Vanguard = 'vanguard';       // 先陣
    case Oni = 'oni';            // 鬼
    case Dash = 'dash';           // 疾駆
    case HeavyTroops = 'heavy-troops';   // 大兵
    case Alliance = 'alliance';       // 同盟
    case SpearTechnique = 'spear-technique'; // 槍術
    case Oushi = 'oushi';          // 黄熾

    public function label(): string
    {
        return match ($this) {
            self::Ambush => '伏',
            self::Palisade => '防',
            self::Revival => '活',
            self::Shinobi => '忍',
            self::Spirit => '気',
            self::Snipe => '狙',
            self::Exaltation => '昂',
            self::Technique => '技',
            self::Vanguard => '先',
            self::Oni => '鬼',
            self::Dash => '疾',
            self::HeavyTroops => '大',
            self::Alliance => '盟',
            self::SpearTechnique => '槍',
            self::Oushi => '黄',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
