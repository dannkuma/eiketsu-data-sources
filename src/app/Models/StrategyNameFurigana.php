<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StrategyNameFurigana extends Model
{
    protected $fillable = ['strategy_name_furigana'];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
