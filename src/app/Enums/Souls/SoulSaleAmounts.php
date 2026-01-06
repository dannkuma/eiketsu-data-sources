<?php

namespace App\Enums\Souls;

enum SoulSaleAmounts: int
{
    case Fifty = 50;
    case TwoHundredFifty = 250;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
