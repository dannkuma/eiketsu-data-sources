<?php
namespace App\Enums;

enum Rarities: string
{
    case N  = 'n';
    case R  = 'r';
    case SR = 'sr';
    case ER = 'er';

    public function label(): string
    {
        return match ($this) {
            self::N  => 'N',
            self::R  => 'R',
            self::SR => 'SR',
            self::ER => 'ER',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}