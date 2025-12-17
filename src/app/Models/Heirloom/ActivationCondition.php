<?php

namespace App\Models\Heirloom;

use App\Enums\Heirlooms\ActivationConditions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
