<?php

namespace App\Enums\Heirlooms;

enum HeirloomPurchaseAmounts: int
{
    case Ten = 10;
    case Hundred = 100;
    case FiveHundred = 500;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
