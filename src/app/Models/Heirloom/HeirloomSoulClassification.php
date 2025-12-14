<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Heirloom\Heirloom;
use App\Enums\Heirlooms\HeirloomSoulClassifications;

class HeirloomSoulClassification extends Model
{
    protected $fillable = ['heirloom_soul_classification'];

    protected $casts = [
        'heirloom_soul_classification' => HeirloomSoulClassifications::class,
    ];

    public function heirlooms(): HasMany
    {
        return $this->hasMany(Heirloom::class);
    }
}
