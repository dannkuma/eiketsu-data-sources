<?php

namespace App\Models\General;

use App\Enums\Generals\Costs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cost extends Model
{
    protected $fillable = ['cost'];

    // Enumインスタンスで取得
    public function getCostEnumAttribute(): ?Costs
    {
        return Costs::tryFrom((string) $this->cost);
    }

    // Enumインスタンスで設定
    public function setCostEnumAttribute(Costs $enum): void
    {
        $this->attributes['cost'] = (float) $enum->value;
    }

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
