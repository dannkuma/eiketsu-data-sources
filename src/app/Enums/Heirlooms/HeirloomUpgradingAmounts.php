<?php

namespace App\Enums\Heirlooms;

enum HeirloomUpgradingAmounts: int
{
    case OneHundred = 100;
    case FiveHundred = 500;
    case FiveThousand = 5000;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
