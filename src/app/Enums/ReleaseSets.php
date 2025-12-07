<?php
namespace App\Enums;

enum ReleaseSets: string
{
    case D1_1      = 'd1-1';
    case D1_1_B    = 'd1-2';
    case D1_OTHER  = 'd1-other';
    case D2_1      = 'd2-1';
    case D2_2      = 'd2-2';
    case D2_OTHER  = 'd2-other';
    case D3_1      = 'd3-1';
    case D3_2      = 'd3-2';
    case D3_OTHER  = 'd3-other';
    case D4_1      = 'd4-1';
    case D4_2      = 'd4-2';
    case D4_OTHER  = 'd4-other';
    case D5_1      = 'd5-1';
    case D5_OTHER  = 'd5-other';

    public function label(): string
    {
        return match ($this) {
            self::D1_1     => '第1弾-1',
            self::D1_1_B   => '第1弾-2',
            self::D1_OTHER => '第1弾-その他',
            self::D2_1     => '第2弾-1',
            self::D2_2     => '第2弾-2',
            self::D2_OTHER => '第2弾-その他',
            self::D3_1     => '第3弾-1',
            self::D3_2     => '第3弾-2',
            self::D3_OTHER => '第3弾-その他',
            self::D4_1     => '第4弾-1',
            self::D4_2     => '第4弾-2',
            self::D4_OTHER => '第4弾-その他',
            self::D5_1     => '第5弾-1',
            self::D5_OTHER => '第5弾-その他',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}