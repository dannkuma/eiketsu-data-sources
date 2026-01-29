<?php

namespace App\Enums\Heirlooms;

enum HeirloomEnhancementTypes: string
{
    case DurationExtension = 'duration_extension';

    public function label(): string
    {
        return match ($this) {
            self::DurationExtension => '効果時間延長',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
