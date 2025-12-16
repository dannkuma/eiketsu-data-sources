<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = ['price_id', 'stripe_product_id', 'name', 'description', 'quantity'];

    public function price(): BelongsTo
    {
        return $this->belongsTo(Price::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
