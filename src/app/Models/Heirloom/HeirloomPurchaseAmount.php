<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Heirloom\RarityHeirloomPurchaseAmount;
use App\Enums\Heirlooms\HeirloomPurchaseAmounts;

class HeirloomPurchaseAmount extends Model
{
    protected $fillable = ['heirloom_purchase_amount'];

    protected $casts = [
        'heirloom_purchase_amount' => HeirloomPurchaseAmounts::class,
    ];

    public function rarityHeirloomPurchaseAmounts(): HasMany
    {
        return $this->hasMany(RarityHeirloomPurchaseAmount::class);
    }
}
