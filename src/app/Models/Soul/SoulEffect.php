<?php

namespace App\Models\Soul;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SoulEffect extends Model
{
    protected $fillable = ['soul_effect_category_id', 'soul_effect_operator_id', 'soul_value_id', 'soul_effect_unit_id'];

    public function soulEffectCategory(): BelongsTo
    {
        return $this->belongsTo(SoulEffectCategory::class);
    }

    public function soulEffectOperator(): BelongsTo
    {
        return $this->belongsTo(SoulEffectOperator::class);
    }

    public function soulValue(): BelongsTo
    {
        return $this->belongsTo(SoulValue::class);
    }

    public function soulEffectUnit(): BelongsTo
    {
        return $this->belongsTo(SoulEffectUnit::class);
    }

    public function soulUserEffects(): HasMany
    {
        return $this->hasMany(SoulUserEffect::class);
    }
}
