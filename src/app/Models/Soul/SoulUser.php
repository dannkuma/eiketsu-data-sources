<?php

namespace App\Models\Soul;

use App\Models\Heirloom\HeirloomUserLevel;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function heirloomUserLevels(): HasOne
    {
        return $this->hasOne(HeirloomUserLevel::class);
    }
}
