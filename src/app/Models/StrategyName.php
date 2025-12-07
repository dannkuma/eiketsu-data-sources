<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StrategyName extends Model
{
    protected $fillable = ['strategy_name'];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
