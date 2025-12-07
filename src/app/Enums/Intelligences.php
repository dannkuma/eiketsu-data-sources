<?php
namespace App\Enums;

enum Intelligences: int
{
    case One   = 1;
    case Two   = 2;
    case Three = 3;
    case Four  = 4;
    case Five  = 5;
    case Six   = 6;
    case Seven = 7;
    case Eight = 8;
    case Nine  = 9;
    case Ten   = 10;
    case Eleven = 11;
    case Twelve = 12;

    public function label(): string
    {
        return (string) $this->value;
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}