<?php
namespace App\Enums\Generals;

enum StrategyCategories: string
{
    case Strengthen        = 'strengthen';         // 強化
    case AllStrengthen     = 'all-strengthen';     // 全体強化
    case Heal              = 'heal';               // 回復
    case Revival           = 'revival';            // 復活
    case Disrupt           = 'disrupt';            // 妨害
    case Damage            = 'damage';             // ダメージ
    case Dance             = 'dance';              // 舞い
    case Counter           = 'counter';            // 反計
    case Formation         = 'formation';          // 陣形
    case ChargeStrategy    = 'charge-strategy';    // ため計略
    case AllOut            = 'all-out';            // 渾身
    case Shikigami         = 'shikigami';          // 式神
    case Kohkou            = 'kohkou';             // 琥煌
    case Chant             = 'chant';              // 詠歌
    case ShortTactics      = 'short-tactics';      // 短計
    case Stronghold        = 'stronghold';         // 拠点
    case Oushi            = 'oushi';             // 黄熾
    case FlagFormation     = 'flag-formation';     // 旗陣形
    case Special           = 'special';            // 特殊

    public function label(): string
    {
        return match ($this) {
            self::Strengthen       => '強化',
            self::AllStrengthen    => '全体強化',
            self::Heal             => '回復',
            self::Revival          => '復活',
            self::Disrupt          => '妨害',
            self::Damage            => 'ダメージ',
            self::Dance            => '舞い',
            self::Counter          => '反計',
            self::Formation        => '陣形',
            self::ChargeStrategy   => 'ため計略',
            self::AllOut           => '渾身',
            self::Shikigami        => '式神',
            self::Kohkou           => '琥煌',
            self::Chant            => '詠歌',
            self::ShortTactics     => '短計',
            self::Stronghold       => '拠点',
            self::Oushi           => '黄熾',
            self::FlagFormation    => '旗陣形',
            self::Special          => '特殊',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}