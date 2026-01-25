<?php

namespace App\Enums\Heirlooms;

enum HeirloomEffectOperators: string
{
    case Plus = 'plus';
    case Minus = 'minus';
    case Circle = 'circle';

    public function label(): string
    {
        return match ($this) {
            self::Plus => '+',
            self::Minus => '-',
            self::Circle => '○',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
