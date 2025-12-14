<?php
namespace App\Enums\Souls;

enum SoulPurchaseAmounts: int
{
    case OneHundred = 100;
    case FiveHundred = 500;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}