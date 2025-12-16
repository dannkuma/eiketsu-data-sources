<?php
namespace App\Enums\Heirlooms;

enum HeirloomSaleAmounts: int
{
    case N         = 5;
    case R         = 25;
    case SR       = 250;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}