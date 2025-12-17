<?php

namespace App\Enums\Generals;

enum CardTypes: string
{
    case Normal = 'normal';
    case EX = 'ex';
    case PL = 'pl';
    case ST = 'st';

    public function label(): string
    {
        return match ($this) {
            self::Normal => '通常',
            self::EX => 'EX',
            self::PL => 'PL',
            self::ST => 'ST',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
