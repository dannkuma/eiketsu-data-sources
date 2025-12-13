<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Heirloom\Heirloom;
use App\Enums\Heirlooms\EffectTargets;

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
