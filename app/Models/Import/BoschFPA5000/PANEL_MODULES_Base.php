<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class PANEL_MODULES_Base extends Model
{
    use HasFactory;

    protected $table = 'PANEL_MODULES_Base';
    protected $connection = 'mysql_BoschFPA5000';
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
