<?php

namespace App\Models\Heirloom;

use App\Enums\Heirlooms\HeirloomEffectOperators;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HeirloomEffectOperator extends Model
{
    protected $fillable = ['heirloom_effect_operator'];

    protected $casts = [
        'heirloom_effect_operator' => HeirloomEffectOperators::class,
    ];

    public function heirloomEffects(): HasMany
    {
        return $this->hasMany(HeirloomEffect::class);
    }
}
