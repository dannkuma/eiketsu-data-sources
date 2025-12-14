<?php

namespace App\Models\Soul;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Soul\Soul;
use App\Enums\Souls\SoulSaleAmounts;

class SoulSaleAmount extends Model
{
    protected $fillable = ['soul_sale_amount'];

    protected function casts(): array
    {
        return [
            'soul_sale_amount' => SoulSaleAmounts::class,
        ];
    }

    public function souls(): HasMany
    {
        return $this->hasMany(Soul::class);
    }
}
