<?php

namespace App\Models\Heirloom;

use App\Enums\Heirlooms\HeirloomUpgradingAmounts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HeirloomUpgradingAmount extends Model
{
    protected $fillable = ['heirloom_upgrading_amount'];

    protected $casts = [
        'heirloom_upgrading_amount' => HeirloomUpgradingAmounts::class,
    ];

    public function rarityLevelHeirloomUpgradingAmounts(): HasMany
    {
        return $this->hasMany(RarityLevelHeirloomUpgradingAmount::class);
    }
}
