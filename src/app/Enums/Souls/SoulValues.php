<?php

namespace App\Enums\Souls;

enum SoulValues: string
{
    case ZeroPointEight = '0.8';
    case One = '1.0';
    case Two = '2.0';
    case Five = '5.0';
    case Six = '6.0';
    case Ten = '10.0';
    case Fifteen = '15.0';
    case Twenty = '20.0';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
