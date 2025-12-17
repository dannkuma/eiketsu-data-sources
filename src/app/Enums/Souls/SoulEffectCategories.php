<?php

namespace App\Enums\Souls;

enum SoulEffectCategories: string
{
    case Speed = 'speed';                // 速度
    case Troop = 'troop';                // 兵力
    case Siege = 'siege';                // 攻城
    case MeleeInterval = 'melee_interval';       // 突撃間隔
    case SpearLength = 'spear_length';         // 槍長さ
    case BowRange = 'bow_range';            // 弓射程
    case SlashRange = 'slash_range';          // 斬撃範囲
    case GunRange = 'gun_range';            // 鉄砲射程
    case Power = 'power';                // 武力
    case Intelligence = 'intelligence';         // 知力
    case Revival = 'revival';              // 復活
    case Stealth = 'stealth';              // 隠密
    case IntelligenceCombat = 'intelligence_combat';  // 知力戦闘
    case SiegeInMelee = 'siege_in_melee';       // 乱戦時攻城

    public function label(): string
    {
        return match ($this) {
            self::Speed => '速度',
            self::Troop => '兵力',
            self::Siege => '攻城',
            self::MeleeInterval => '突撃間隔',
            self::SpearLength => '槍長さ',
            self::BowRange => '弓射程',
            self::SlashRange => '斬撃範囲',
            self::GunRange => '鉄砲射程',
            self::Power => '武力',
            self::Intelligence => '知力',
            self::Revival => '復活',
            self::Stealth => '隠密',
            self::IntelligenceCombat => '知力戦闘',
            self::SiegeInMelee => '乱戦時攻城',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
