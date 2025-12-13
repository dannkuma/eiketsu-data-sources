<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Heirloom\HeirloomEffect;
use App\Enums\Heirlooms\HeirloomEffectOperators;

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
