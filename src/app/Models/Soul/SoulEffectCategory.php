<?php

namespace App\Models\Soul;

use App\Enums\Souls\SoulEffectCategories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
