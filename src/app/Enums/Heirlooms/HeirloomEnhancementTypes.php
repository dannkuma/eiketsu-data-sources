<?php

namespace App\Enums\Heirlooms;

enum HeirloomEnhancementTypes: string
{
    // TODO: スクレイピング後に追加
    case DurationExtension = 'duration_extension';

    public function label(): string
    {
        return match ($this) {
            // TODO: スクレイピング後に追加
            self::DurationExtension => '効果時間延長',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
