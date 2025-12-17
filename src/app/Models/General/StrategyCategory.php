<?php

namespace App\Models\General;

use App\Enums\Generals\StrategyCategories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
