<?php

namespace App\Models\Heirloom;

use App\Models\Soul\SoulUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HeirloomUserLevel extends Model
{
    protected $fillable = ['heirloom_id', 'user_id', 'level_id', 'lock', 'submission_status', 'soul_user_id'];

    public function heirloom(): BelongsTo
    {
        return $this->belongsTo(Heirloom::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }

    public function soulUser(): BelongsTo
    {
        return $this->belongsTo(SoulUser::class);
    }
}
