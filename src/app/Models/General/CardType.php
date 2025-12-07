<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\CardTypes;

class CardType extends Model
{
    protected $fillable = ['card_type'];

    protected $casts = [
        'card_type' => CardTypes::class,
    ];

    public function generals(): HasMany
    {
        return $this->hasMany(General::class);
    }
}
