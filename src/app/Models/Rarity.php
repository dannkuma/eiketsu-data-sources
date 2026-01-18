<?php

namespace App\Models;

use App\Enums\Rarities;
use App\Models\General\General;
use App\Models\Heirloom\RarityHeirloomPurchaseAmount;
use App\Models\Heirloom\RarityHeirloomSaleAmount;
use App\Models\Heirloom\RarityLevelHeirloomUpgradingAmount;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rarity extends Model
{
    protected $fillable = ['rarity'];

    protected $casts = [
        'rarity' => Rarities::class,
    ];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }

    public function rarityHeirloomPurchaseAmounts(): HasMany
    {
        return $this->hasMany(RarityHeirloomPurchaseAmount::class);
    }

    public function rarityHeirloomSaleAmounts(): HasMany
    {
        return $this->hasMany(RarityHeirloomSaleAmount::class);
    }

    public function rarityLevelHeirloomUpgradingAmounts(): HasMany
    {
        return $this->hasMany(RarityLevelHeirloomUpgradingAmount::class);
    }
}
