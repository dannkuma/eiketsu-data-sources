<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Heirloom\HeirloomEffectSummary;
use App\Models\Heirloom\HeirloomEffectDetail;
use App\Models\Heirloom\Level;

class HeirloomEffectSummaryMapping extends Model
{
    protected $fillable = ['heirloom_effect_summary_id', 'heirloom_effect_detail_id', 'level_id'];

    public function heirloomEffectSummary(): BelongsTo
    {
        return $this->belongsTo(HeirloomEffectSummary::class);
    }

    public function heirloomEffectDetail(): BelongsTo
    {
        return $this->belongsTo(HeirloomEffectDetail::class);
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }
}
