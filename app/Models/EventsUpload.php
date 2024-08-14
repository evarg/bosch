<?php

namespace App\Models;

use App\Enums\EventsUploadStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $desc
 * @property string $org_file_name
 * @property string $hash_file_name
 * @property EventsUploadStatus $status
 * @property string $size
 * @property string $mime_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\EventsUploadFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EventsUpload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventsUpload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventsUpload query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventsUpload whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventsUpload whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventsUpload whereHashFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventsUpload whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventsUpload whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventsUpload whereOrgFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventsUpload whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventsUpload whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventsUpload whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
