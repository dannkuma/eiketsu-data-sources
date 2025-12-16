<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Heirloom\RarityLevelHeirloomUpgradingAmount;
use App\Enums\Heirlooms\HeirloomUpgradingAmounts;

class HeirloomUpgradingAmount extends Model
{
    protected $fillable = [ 'heirloom_upgrading_amount' ];

    protected $casts = [
        'heirloom_upgrading_amount' => HeirloomUpgradingAmounts::class,
    ];

    public function rarityLevelHeirloomUpgradingAmounts(): HasMany
    {
        return $this->hasMany(RarityLevelHeirloomUpgradingAmount::class);
    }
}
