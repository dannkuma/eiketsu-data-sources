<?php
namespace App\Enums\Souls;

enum SoulEffectOperators: string
{
    case Plus         = 'plus';
    case Minus        = 'minus';

    public function label(): string
    {
        return match ($this) {
            self::Plus => '+',
            self::Minus => '-',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}