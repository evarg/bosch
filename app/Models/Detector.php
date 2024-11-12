<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Database\Factories\DetectorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Detector newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Detector newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Detector query()
 * @property int $id
 * @property int $group_id
 * @property int $loop_id
 * @property int $org_group_number
 * @property int $org_group_address
 * @property int $org_loop_number
 * @property int $org_loop_address
 * @property string $producer
 * @property string $type
 * @property string $instalation_date
 * @property string $desc_1
 * @property string $desc_2
 * @property string $desc_3
 * @property string $desc_4
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereDesc1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereDesc2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereDesc3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereDesc4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereInstalationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereLoopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereOrgGroupAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereOrgGroupNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereOrgLoopAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereOrgLoopNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereProducer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detector whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Detector extends Model
{
    use HasFactory;
}
