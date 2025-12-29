<?php

namespace App\Models\Soul;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SoulUserEffect extends Model
{
    protected $fillable = ['soul_user_id', 'soul_effect_id', 'is_effect_fixed'];

    protected $casts = [
        'is_effect_fixed' => 'boolean',
    ];

    public function soulUser(): BelongsTo
    {
        return $this->belongsTo(SoulUser::class);
    }

    public function soulEffect(): BelongsTo
    {
        return $this->belongsTo(SoulEffect::class);
    }
}
