<?php

namespace App\Enums;

enum SortStatus: string
{
    case BASE = 'base';
    case DETAIL = 'detail';
    case SORT = 'sort';

    public function label(): string
    {
        return match ($this) {
            self::BASE => config('ui.general_sort_detail.base'),
            self::DETAIL => config('ui.general_sort_detail.detail'),
            self::SORT => config('ui.general_sort_detail.sort'),
        };
    }
}
