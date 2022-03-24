<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\IncidentType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\IncidentTypeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|IncidentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IncidentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IncidentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|IncidentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncidentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncidentType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncidentType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class IncidentType extends Model
{
    use HasFactory;


    protected $fillable = [
        'name'
    ];
}
