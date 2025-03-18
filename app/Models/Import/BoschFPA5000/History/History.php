<?php

namespace App\Models\Import\BoschFPA5000\History;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class History extends Model
{
    use HasFactory;

    protected $table = 'History';
    protected $connection = 'mysql_BoschFPA5000';

    public function HistoryEntry()
    {
        return $this->belongsTo(History::class, 'HistoryEntry');
    }
}
