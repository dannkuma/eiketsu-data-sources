<?php
namespace App\Enums\Heirlooms;

enum HeirloomEffectCategories: string
{
    case revival                  = 'revival';                  // 復活減少
    case troop                    = 'troop';                    // 兵力
    case power                    = 'power';                    // 武力
    case intelligence             = 'intelligence';             // 知力
    case speed                    = 'speed';                    // 速度
    case disruption               = 'disruption';               // 妨害
    case morale                   = 'morale';                   // 士気
    case school_gauge             = 'school_gauge';             // 流派ゲージ
    case return_castle            = 'return_castle';            // 帰城
    case haki_increase            = 'haki_increase';            // 覇気増加量
    case protection_multiplier    = 'protection_multiplier';    // 防護倍率
    case siege                    = 'siege';                    // 攻城
    case troop_on_defeat          = 'troop_on_defeat';          // 撃破時兵力
    case wheel                    = 'wheel';                    // 車輪
    case running_shot_extension   = 'running_shot_extension';   // 走射延長
    case instant_slash            = 'instant_slash';            // 即斬撃
    case reload_time              = 'reload_time';              // リロード時間
    case melee_interval           = 'melee_interval';           // 乱戦間隔

    public function label(): string
    {
        return match ($this) {
            self::revival                => '復活減少',
            self::troop                  => '兵力',
            self::power                  => '武力',
            self::intelligence           => '知力',
            self::speed                  => '速度',
            self::disruption             => '妨害',
            self::morale                 => '士気',
            self::school_gauge           => '流派ゲージ',
            self::return_castle          => '帰城',
            self::haki_increase          => '覇気増加量',
            self::protection_multiplier  => '防護倍率',
            self::siege                  => '攻城',
            self::troop_on_defeat        => '撃破時兵力',
            self::wheel                  => '車輪',
            self::running_shot_extension => '走射延長',
            self::instant_slash          => '即斬撃',
            self::reload_time            => 'リロード時間',
            self::melee_interval         => '乱戦間隔',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}