<?php

namespace App\Models\Soul;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Soul\SoulUser;
use App\Models\Soul\SoulEffect;

class SoulUserEffect extends Model
{
    protected $fillable = ['soul_user_id', 'soul_effect_id', 'effect_fixed_flag'];

    public function soulUser(): BelongsTo
    {
        return $this->belongsTo(SoulUser::class);
    }

    public function soulEffect(): BelongsTo
    {
        return $this->belongsTo(SoulEffect::class);
    }
}
