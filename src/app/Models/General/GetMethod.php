<?php

namespace App\Models\General;

use App\Enums\Generals\GetMethods;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GetMethod extends Model
{
    protected $fillable = ['get_method'];

    protected $casts = [
        'get_method' => GetMethods::class,
    ];

    public function generalGetMethods(): HasMany
    {
        return $this->hasMany(GeneralGetMethod::class);
    }
}
