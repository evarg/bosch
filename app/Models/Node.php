<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function ConfigNetwork(): BelongsTo
    {
        return $this->belongsTo(ConfigNetwork::class);
    }
=======
    protected $fillable = [
        'netLocalCRC', 'netGroup', 'netNode'
        
    ];

>>>>>>> c442b4a539da68cc28a7478442cda6ea4e174b98
}
