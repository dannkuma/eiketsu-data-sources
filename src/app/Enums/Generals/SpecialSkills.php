<?php

namespace App\Enums\Generals;

enum SpecialSkills: string
{
    case None = 'none';           // 無特技
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
            self::None => '無特技',
            self::Ambush => '伏兵',
            self::Palisade => '防柵',
            self::Revival => '復活',
            self::Shinobi => '忍',
            self::Spirit => '気合',
            self::Snipe => '狙撃',
            self::Exaltation => '昂揚',
            self::Technique => '技巧',
            self::Vanguard => '先陣',
            self::Oni => '鬼',
            self::Dash => '疾駆',
            self::HeavyTroops => '大兵',
            self::Alliance => '同盟',
            self::SpearTechnique => '槍術',
            self::Oushi => '黄熾',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
