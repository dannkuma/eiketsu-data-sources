<?php

namespace App\Models\Heirloom;

use App\Enums\Heirlooms\HeirloomPurchaseAmounts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HeirloomPurchaseAmount extends Model
{
    protected $fillable = ['heirloom_purchase_amount'];

    protected $casts = [
        'heirloom_purchase_amount' => HeirloomPurchaseAmounts::class,
    ];

    public function heirloomRarityHeirloomPurchaseAmounts(): HasMany
    {
        return $this->hasMany(HeirloomRarityHeirloomPurchaseAmount::class);
    }
}
