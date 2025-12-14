<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GeneralGetMethod extends Model
{
    protected $fillable = [
        'general_id',
        'get_method',
        'general_provided_start_id',
        'general_provided_end_id',
    ];

    public function generals(): BelongsTo
    {
        return $this->belongsTo(General::class, 'general_id');
    }

    public function getMethod(): BelongsTo
    {
        return $this->belongsTo(GetMethod::class, 'get_method_id');
    }

    public function generalProvidedStart(): BelongsTo
    {
        return $this->belongsTo(GeneralProvidedStart::class, 'general_provided_start_id');
    }

    public function generalProvidedEnd(): BelongsTo
    {
        return $this->belongsTo(GeneralProvidedEnd::class, 'general_provided_end_id');
    }
}
