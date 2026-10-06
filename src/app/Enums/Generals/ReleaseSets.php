<?php

namespace App\Enums\Generals;

enum ReleaseSets: string
{
    case D1_1 = 'd1-1';
    case D1_2 = 'd1-2';
    case D1_EX = 'd1-ex';
    case D1_PL = 'd1-pl';
    case D1_ST = 'd1-st';
    case D2_1 = 'd2-1';
    case D2_2 = 'd2-2';
    case D2_EX = 'd2-ex';
    case D2_PL = 'd2-pl';
    case D2_ST = 'd2-st';
    case D3_1 = 'd3-1';
    case D3_2 = 'd3-2';
    case D3_EX = 'd3-ex';
    case D3_PL = 'd3-pl';
    case D3_ST = 'd3-st';
    case D4_1 = 'd4-1';
    case D4_2 = 'd4-2';
    case D4_EX = 'd4-ex';
    case D4_PL = 'd4-pl';
    case D4_ST = 'd4-st';
    case D5_1 = 'd5-1';
    case D5_2 = 'd5-2';
    case D5_EX = 'd5-ex';
    case D5_PL = 'd5-pl';
    case D5_ST = 'd5-st';

    public function label(): string
    {
        return match ($this) {
            self::D1_1 => '第1弾-1',
            self::D1_2 => '第1弾-2',
            self::D1_EX => '第1弾-EX',
            self::D1_PL => '第1弾-PL',
            self::D1_ST => '第1弾-ST',
            self::D2_1 => '第2弾-1',
            self::D2_2 => '第2弾-2',
            self::D2_EX => '第2弾-EX',
            self::D2_PL => '第2弾-PL',
            self::D2_ST => '第2弾-ST',
            self::D3_1 => '第3弾-1',
            self::D3_2 => '第3弾-2',
            self::D3_EX => '第3弾-EX',
            self::D3_PL => '第3弾-PL',
            self::D3_ST => '第3弾-ST',
            self::D4_1 => '第4弾-1',
            self::D4_2 => '第4弾-2',
            self::D4_EX => '第4弾-EX',
            self::D4_PL => '第4弾-PL',
            self::D4_ST => '第4弾-ST',
            self::D5_1 => '第5弾-1',
            self::D5_2 => '第5弾-2',
            self::D5_EX => '第5弾-EX',
            self::D5_PL => '第5弾-PL',
            self::D5_ST => '第5弾-ST',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * 第1弾 (D1) で始まり、末尾が半角数字のケースのみを取得する
     * (例: D1_1, D1_2 は含むが、D1_EX, D1_PL などは除外する)
     *
     * @return self[]
     */
    public static function getD1NormalCases(): array
    {
        return array_filter(self::cases(), function (self $case) {
            return str_starts_with($case->name, 'D1') && preg_match('/[0-9]$/', $case->name);
        });
    }

    /**
     * 第2弾 (D2) で始まり、末尾が半角数字のケースのみを取得する
     * (例: D2_1, D2_2 は含むが、D2_EX, D2_PL などは除外する)
     *
     * @return self[]
     */
    public static function getD2NormalCases(): array
    {
        return array_filter(self::cases(), function (self $case) {
            return str_starts_with($case->name, 'D2') && preg_match('/[0-9]$/', $case->name);
        });
    }

    /**
     * 第3弾 (D3) で始まり、末尾が半角数字のケースのみを取得する
     * (例: D3_1, D3_2 は含むが、D3_EX, D3_PL などは除外する)
     *
     * @return self[]
     */
    public static function getD3NormalCases(): array
    {
        return array_filter(self::cases(), function (self $case) {
            return str_starts_with($case->name, 'D3') && preg_match('/[0-9]$/', $case->name);
        });
    }

    /**
     * 第4弾 (D4) で始まり、末尾が半角数字のケースのみを取得する
     * (例: D4_1, D4_2 は含むが、D4_EX, D4_PL などは除外する)
     *
     * @return self[]
     */
    public static function getD4NormalCases(): array
    {
        return array_filter(self::cases(), function (self $case) {
            return str_starts_with($case->name, 'D4') && preg_match('/[0-9]$/', $case->name);
        });
    }

    /**
     * 第5弾 (D5) で始まり、末尾が半角数字のケースのみを取得する
     * (例: D5_1, D5_2 は含むが、D5_EX, D5_PL などは除外する)
     *
     * @return self[]
     */
    public static function getD5NormalCases(): array
    {
        return array_filter(self::cases(), function (self $case) {
            return str_starts_with($case->name, 'D5') && preg_match('/[0-9]$/', $case->name);
        });
    }
}
