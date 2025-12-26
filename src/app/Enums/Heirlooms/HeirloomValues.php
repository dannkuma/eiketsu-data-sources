<?php

namespace App\Enums\Heirlooms;

enum HeirloomValues: string
{
    case Twenty = '20.0';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
