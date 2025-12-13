<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Heirloom\HeirloomEffect;
use App\Models\Heirloom\HeirloomEnhancementType;

class HeirloomEffectDetail extends Model
{
    protected $fillable = ['heirloom_effect_id', 'heirloom_enhancement_type_id', 'value'];

    public function heirloomEffect(): BelongsTo
    {
        return $this->belongsTo(HeirloomEffect::class);
    }

    public function heirloomEnhancementType(): BelongsTo
    {
        return $this->belongsTo(HeirloomEnhancementType::class);
    }
}
