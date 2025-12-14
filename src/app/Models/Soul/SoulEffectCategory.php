<?php

namespace App\Models\Soul;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\Souls\SoulEffectCategories;

class SoulEffectCategory extends Model
{
    protected $fillable = ['soul_effect_category'];

    protected function casts(): array
    {
        return [
            'soul_effect_category' => SoulEffectCategories::class,
        ];
    }

    public function soulEffects(): HasMany
    {
        return $this->hasMany(SoulEffect::class);
    }
}
