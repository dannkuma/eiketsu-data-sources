<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CharacterVoice extends Model
{
    protected $fillable = ['character_voice'];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
