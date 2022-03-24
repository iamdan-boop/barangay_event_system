<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Incident
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $date_incident
 * @property \Illuminate\Support\Carbon $time_incident
 * @property string $location
 * @property string $type_incident
 * @property string $people_involve
 * @property string $details_incident
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\IncidentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Incident newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Incident newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Incident query()
 * @method static \Illuminate\Database\Eloquent\Builder|Incident whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incident whereDateIncident($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incident whereDetailsIncident($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incident whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incident whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incident wherePeopleInvolve($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incident whereTimeIncident($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incident whereTypeIncident($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incident whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Incident extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_incident',
        'time_incident',
        'location',
        'type_incident',
        'people_involve',
        'details_incident'
    ];


    protected $dates = [
        'date_incident',
        'time_incident'
    ];
}
