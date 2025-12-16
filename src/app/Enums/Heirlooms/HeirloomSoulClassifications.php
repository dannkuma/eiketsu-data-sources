<?php
namespace App\Enums\Heirlooms;

enum HeirloomSoulClassifications: string
{
    case Treasure = 'treasure'; // 宝物
    case Armor    = 'armor';    // 鎧兜
    case Weapon   = 'weapon';   // 武器
    case Gunbai   = 'gunbai';   // 軍配
    case Horse    = 'horse';    // 馬
    case Book     = 'book';     // 書物
    case Gem      = 'gem';      // 宝石

    public function label(): string
    {
        return match ($this) {
            self::Treasure => '宝物',
            self::Armor    => '鎧兜',
            self::Weapon   => '武器',
            self::Gunbai   => '軍配',
            self::Horse    => '馬',
            self::Book     => '書物',
            self::Gem      => '宝石',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}