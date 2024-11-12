<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $desc
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\InstalationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Instalation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Instalation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Instalation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Instalation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instalation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instalation whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instalation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instalation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instalation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Instalation extends Model
{
    use HasFactory;
}
