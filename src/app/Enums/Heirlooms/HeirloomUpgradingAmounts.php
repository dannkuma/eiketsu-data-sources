<?php
namespace App\Enums\Heirlooms;

enum HeirloomUpgradingAmounts: int
{
    case OTHER      = 100;
    case SR         = 500;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}