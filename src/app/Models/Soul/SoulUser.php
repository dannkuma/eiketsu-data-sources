<?php

namespace App\Models\Soul;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Soul\SoulUserEffect;

class SoulUser extends Model
{
    protected $fillable = ['soul_id', 'user_id', 'lock'];

    public function soul(): BelongsTo
    {
        return $this->belongsTo(Soul::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function soulUserEffects(): HasMany
    {
        return $this->hasMany(SoulUserEffect::class);
    }
}
