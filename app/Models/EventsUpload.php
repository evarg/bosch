<?php

namespace App\Models;

use App\Enums\EventsUploadStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'desc'
    ];

    protected $casts = [
        'status' => EventsUploadStatus::class,
    ];

}
