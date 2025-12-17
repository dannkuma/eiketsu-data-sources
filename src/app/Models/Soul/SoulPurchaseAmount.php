<?php

namespace App\Models\Soul;

use App\Enums\Souls\SoulPurchaseAmounts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SoulPurchaseAmount extends Model
{
    protected $fillable = ['soul_purchase_amount'];

    protected function casts(): array
    {
        return [
            'soul_purchase_amount' => SoulPurchaseAmounts::class,
        ];
    }

    public function souls(): HasMany
    {
        return $this->hasMany(Soul::class);
    }
}
