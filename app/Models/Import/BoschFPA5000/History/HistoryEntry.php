<?php

namespace App\Models\Import\BoschFPA5000\History;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class HistoryEntry extends Model
{
    use HasFactory;

    protected $table = 'history_entry';
    protected $connection = 'mysql_BoschFPA5000';

    public function Entry()
    {
        return $this->hasMany(History::class, 'HistoryEntry');
    }

}
