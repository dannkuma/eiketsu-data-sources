<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Heirloom\HeirloomEffectSummary;
use App\Enums\Heirlooms\ActivationConditions;

class ActivationCondition extends Model
{
    protected $fillable = ['activation_condition'];

    protected $casts = [
        'activation_condition' => ActivationConditions::class,
    ];

    public function heirloomEffectSummaries(): HasMany
    {
        return $this->hasMany(HeirloomEffectSummary::class);
    }
}
