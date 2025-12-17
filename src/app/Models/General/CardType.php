<?php

namespace App\Models\General;

use App\Enums\Generals\CardTypes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
