<?php

namespace App\Models\Heirloom;

use App\Enums\Heirlooms\EffectTargets;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EffectTarget extends Model
{
    protected $fillable = ['effect_target'];

    protected $casts = [
        'effect_target' => EffectTargets::class,
    ];

    public function heirlooms(): HasMany
    {
        return $this->hasMany(Heirloom::class);
    }
}
