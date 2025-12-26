<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HeirloomEffect extends Model
{
    protected $fillable = ['heirloom_effect_category_id', 'heirloom_effect_operator_id', 'heirloom_value_id', 'heirloom_effect_unit_id'];

    public function heirloomEffectCategory(): BelongsTo
    {
        return $this->belongsTo(HeirloomEffectCategory::class);
    }

    public function heirloomEffectOperator(): BelongsTo
    {
        return $this->belongsTo(HeirloomEffectOperator::class);
    }

    public function heirloomValue(): BelongsTo
    {
        return $this->belongsTo(HeirloomValue::class);
    }

    public function heirloomEffectUnit(): BelongsTo
    {
        return $this->belongsTo(HeirloomEffectUnit::class);
    }

    public function heirloomEffectDetails(): HasMany
    {
        return $this->hasMany(HeirloomEffectDetail::class);
    }
}
