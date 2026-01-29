<?php

namespace App\Enums\Heirlooms;

enum HeirloomSaleAmounts: int
{
    case Five = 5;
    case TwentyFive = 25;
    case TwoHundredFifty = 250;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
