<?php
namespace App\Enums\Heirlooms;

enum Levels: int
{
    case One   = 1;
    case Two   = 2;
    case Three = 3;
    case Four  = 4;

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}