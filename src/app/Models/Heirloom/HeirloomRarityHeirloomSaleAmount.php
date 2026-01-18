<?php

namespace App\Models\Heirloom;

use App\Models\Rarity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HeirloomRarityHeirloomSaleAmount extends Model
{
    protected $fillable = ['rarity_id', 'heirloom_sale_amount_id', 'heirloom_id'];

    public function rarity(): BelongsTo
    {
        return $this->belongsTo(Rarity::class);
    }

    public function heirloomSaleAmount(): BelongsTo
    {
        return $this->belongsTo(HeirloomSaleAmount::class);
    }

    public function heirloom(): BelongsTo
    {
        return $this->belongsTo(Heirloom::class);
    }
}
