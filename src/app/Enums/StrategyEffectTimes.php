<?php
namespace App\Enums;

enum StrategyEffectTimes: string
{
    case IntellectTime = 'intellect-time';
    case Instant       = 'instant';
    case UntilRetreat  = 'until-retreat';
    case FixedTime     = 'fixed-time';

    public function label(): string
    {
        return match ($this) {
            self::IntellectTime => '知力時間',
            self::Instant       => '一瞬',
            self::UntilRetreat  => '撤退するまで',
            self::FixedTime     => '固定時間',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}