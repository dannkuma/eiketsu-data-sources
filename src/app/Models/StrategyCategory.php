<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Enums\StrategyCategories;

class StrategyCategory extends Model
{
    protected $fillable = ['strategy_category'];

    protected $casts = [
        'strategy_category' => StrategyCategories::class,
    ];

    public function generals(): BelongsToMany
    {
        return $this->belongsToMany(General::class, 'general_strategy_categories')->withTimestamps();
    }
}
