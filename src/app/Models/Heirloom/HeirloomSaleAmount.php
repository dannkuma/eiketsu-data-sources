<?php

namespace App\Models\Heirloom;

use App\Enums\Heirlooms\HeirloomSaleAmounts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
