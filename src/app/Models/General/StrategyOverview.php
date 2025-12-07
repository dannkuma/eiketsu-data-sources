<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StrategyOverview extends Model
{
    protected $fillable = ['strategy_overview'];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
