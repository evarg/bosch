<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DOTC410I extends Model
{
    use HasFactory;
    use \App\Traits\HasAutoDet;

    protected $table = 'LSNI_DOTC410I';

    protected $fillable = [];
}