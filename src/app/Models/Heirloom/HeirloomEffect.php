<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Heirloom\HeirloomEffectOperator;

class HeirloomEffect extends Model
{
    protected $fillable = [ 'heirloom_effect_category_id','heirloom_effect_operator_id', 'heirloom_value_id', 'heirloom_effect_unit_id'];

    public function heirloomEffectOperator(): BelongsTo
    {
        return $this->belongsTo(HeirloomEffectOperator::class);
    }
}
