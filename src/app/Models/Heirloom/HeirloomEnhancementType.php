<?php

namespace App\Models\Heirloom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Heirloom\Heirloom;
// use App\Enums\Heirlooms\HeirloomEnhancementTypes; TODO: Enum追加後に有効化

class HeirloomEnhancementType extends Model
{
    protected $fillable = ['heirloom_enhancement_type'];

    // TODO: Enum追加後に有効化
    // protected $casts = [
    //     'heirloom_enhancement_type' => HeirloomEnhancementTypes::class,
    // ];

    public function heirlooms(): HasMany
    {
        return $this->hasMany(Heirloom::class);
    }
}
