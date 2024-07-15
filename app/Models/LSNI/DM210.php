<?php

namespace App\Models\LSNI;

use App\Models\ManuDetBase;
use App\Traits\HasManuDet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class DM210 extends Model
{
    use HasFactory;
    use HasManuDet;

    protected $table = 'LSNI_DM210';

}
