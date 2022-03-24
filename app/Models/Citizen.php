<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Citizen
 *
 * @property int $id
 * @property int $status_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $contact
 * @property string $gender
 * @property \Illuminate\Support\Carbon $dob
 * @property string $status
 * @property string $citizenship
 * @property string $occupation
 * @property string $zone
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CitizenFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen query()
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereCitizenship($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereZone($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CitizenCertificate[] $citizenCertificate
 * @property-read int|null $citizen_certificate_count
 */
class Citizen extends Model
{
    use HasFactory;


    protected $fillable = [
        'status_id',
        'first_name',
        'middle_name',
        'last_name',
        'contact',
        'gender',
        'dob',
        'status',
        'citizenship',
        'occupation',
        'zone',
        'address',
    ];


    protected $dates = [
        'dob'
    ];


    public function citizenCertificate() : HasMany {
        return $this->hasMany(CitizenCertificate::class);
    }
}
