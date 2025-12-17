<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HeirloomEffectDetail extends Model
{
    protected $fillable = ['heirloom_effect_id', 'heirloom_enhancement_type_id'];

    public function heirloomEffect(): BelongsTo
    {
        return $this->belongsTo(HeirloomEffect::class);
    }

    public function heirloomEnhancementType(): BelongsTo
    {
        return $this->belongsTo(HeirloomEnhancementType::class);
    }
}
