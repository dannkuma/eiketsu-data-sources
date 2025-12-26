<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HeirloomEffectSummary extends Model
{
    protected $fillable = ['heirloom_id', 'heirloom_effect_description_id', 'heirloom_effect_category_id', 'activation_condition_id', 'effect_target_id', 'effect_classification'];

    public function heirloom(): BelongsTo
    {
        return $this->belongsTo(Heirloom::class);
    }

    public function heirloomEffectDescription(): BelongsTo
    {
        return $this->belongsTo(HeirloomEffectDescription::class);
    }

    public function heirloomEffectCategory(): BelongsTo
    {
        return $this->belongsTo(HeirloomEffectCategory::class);
    }

    public function activationCondition(): BelongsTo
    {
        return $this->belongsTo(ActivationCondition::class);
    }

    public function effectTarget(): BelongsTo
    {
        return $this->belongsTo(EffectTarget::class);
    }

    public function heirloomEffectSummaryMappings(): HasMany
    {
        return $this->hasMany(HeirloomEffectSummaryMapping::class);
    }
}
