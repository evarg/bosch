<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class PANEL_MODULES_Base extends Model
{
    use HasFactory;

    protected $table = 'PANEL_MODULES_Base';

    protected $fillable = [
        'siType',
        'slot',
        'label',
        'serialNumber',
        'rpsDisplayName',
        'Checkdate',
    ];

    public function PANEL(): BelongsTo
    {
        return $this->belongsTo(PANEL::class);
    }

    public function MODULEABLE(): MorphTo
    {
        return $this->morphTo();
    }

}
