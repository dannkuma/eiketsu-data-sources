<?php

namespace App\Enums\Heirlooms;

enum HeirloomEffectCategories: string
{
    case Revival = 'revival';                 // 復活減少
    case Troop = 'troop';                   // 兵力
    case Power = 'power';                   // 武力
    case Intelligence = 'intelligence';            // 知力
    case Speed = 'speed';                   // 速度
    case Disruption = 'disruption';              // 妨害
    case Morale = 'morale';                  // 士気
    case SchoolGauge = 'school_gauge';            // 流派ゲージ
    case ReturnCastle = 'return_castle';           // 帰城
    case HakiIncrease = 'haki_increase';           // 覇気増加量
    case ProtectionMultiplier = 'protection_multiplier';   // 防護倍率
    case Siege = 'siege';                   // 攻城
    case TroopOnDefeat = 'troop_on_defeat';         // 撃破時兵力
    case Wheel = 'wheel';                   // 車輪
    case RunningShotExtension = 'running_shot_extension';  // 走射延長
    case InstantSlash = 'instant_slash';           // 即斬撃
    case ReloadTime = 'reload_time';             // リロード時間
    case MeleeInterval = 'melee_interval';          // 乱戦間隔

    public function label(): string
    {
        return match ($this) {
            self::Revival => '復活減少',
            self::Troop => '兵力',
            self::Power => '武力',
            self::Intelligence => '知力',
            self::Speed => '速度',
            self::Disruption => '妨害',
            self::Morale => '士気',
            self::SchoolGauge => '流派ゲージ',
            self::ReturnCastle => '帰城',
            self::HakiIncrease => '覇気増加量',
            self::ProtectionMultiplier => '防護倍率',
            self::Siege => '攻城',
            self::TroopOnDefeat => '撃破時兵力',
            self::Wheel => '車輪',
            self::RunningShotExtension => '走射延長',
            self::InstantSlash => '即斬撃',
            self::ReloadTime => 'リロード時間',
            self::MeleeInterval => '乱戦間隔',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
