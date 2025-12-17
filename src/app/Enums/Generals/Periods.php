<?php

namespace App\Enums\Generals;

enum Periods: string
{
    case Sengoku = 'sengoku';
    case EdoBakumatsu = 'edo-bakumatsu';
    case Sangokushi = 'sangokushi';
    case Heian = 'heian';
    case Chusei = 'chusei';
    case ShunjuSengoku = 'shunju-sengoku';
    case Special = 'special';

    public function label(): string
    {
        return match ($this) {
            self::Sengoku => '戦国',
            self::EdoBakumatsu => '江戸・幕末',
            self::Sangokushi => '三国志',
            self::Heian => '平安',
            self::Chusei => '中世',
            self::ShunjuSengoku => '春秋戦国',
            self::Special => '特殊',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
