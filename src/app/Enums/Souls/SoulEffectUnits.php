<?php
namespace App\Enums\Souls;

enum SoulEffectUnits: string
{
    case Second     = 'second';     // 秒
    case Percent    = 'percent';    // %

    public function label(): string
    {
        return match ($this) {
            self::Second     => '秒',
            self::Percent    => '%',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}