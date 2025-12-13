<?php
namespace App\Enums\Heirlooms;

enum HeirloomEffectDescriptions: int
{
    // TODO: スクレイピング後に追加
    case Revival         = 'revival';

    public function label(): string
    {
        return match ($this) {
            // TODO: スクレイピング後に追加
            self::Revival => '撤退中の味方の効果時間が減少する',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}