<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FULLEON_BASE extends Model
{
    use HasFactory;
    use \App\Traits\HasAutoDet;

    protected $table = 'LSNI_FULLEON_BASE';

    protected $fillable = [];
}
