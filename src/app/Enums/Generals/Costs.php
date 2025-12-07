<?php
namespace App\Enums\Generals;

enum Costs: string
{
    case One             = '1.0';
    case OnePointFive    = '1.5';
    case Two             = '2.0';
    case TwoPointFive    = '2.5';
    case Three           = '3.0';
    case ThreePointFive  = '3.5';
    case Four            = '4.0';

    public function label(): string
    {
        return $this->value;
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}