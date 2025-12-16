<?php
namespace App\Enums\Generals;

enum FactionColors: string
{
    case Blue = 'blue';
    case Red = 'red';
    case Green = 'green';
    case Gray = 'gray';
    case Purple = 'purple';
    case Orange = 'orange';
    case Yellow = 'yellow';

    public function label(): string
    {
        return match ($this) {
            self::Blue => '蒼',
            self::Red => '緋',
            self::Green => '碧',
            self::Gray => '玄',
            self::Purple => '紫',
            self::Orange => '琥',
            self::Yellow => '黄',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}