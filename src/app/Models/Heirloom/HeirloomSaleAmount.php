<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Heirloom\Heirloom;
use App\Enums\Heirlooms\HeirloomSaleAmounts;

class HeirloomSaleAmount extends Model
{
    protected $fillable = ['heirloom_sale_amount'];

    protected $casts = [
        'heirloom_sale_amount' => HeirloomSaleAmounts::class,
    ];

    public function heirlooms(): HasMany
    {
        return $this->hasMany(Heirloom::class);
    }
}
