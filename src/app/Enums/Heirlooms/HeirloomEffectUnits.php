<?php

namespace App\Enums\Heirlooms;

enum HeirloomEffectUnits: string
{
    case Second = 'second';     // 秒
    case Percent = 'percent';    // %
    case Multiplier = 'multiplier'; // 倍

    public function label(): string
    {
        return match ($this) {
            self::Second => '秒',
            self::Percent => '%',
            self::Multiplier => '倍',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
