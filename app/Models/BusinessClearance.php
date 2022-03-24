<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\BusinessClearance
 *
 * @property int $id
 * @property int $citizen_id
 * @property string $business_name
 * @property string $address
 * @property string $business_type
 * @property string $manager
 * @property string $residence_address
 * @property string $applied_for
 * @property string $cert_no
 * @property string $or_no
 * @property float $amount_paid
 * @property string $control_no
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Citizen $citizen
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance query()
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereAmountPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereAppliedFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereBusinessName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereBusinessType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereCertNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereCitizenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereControlNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereManager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereOrNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereResidenceAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BusinessClearance whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BusinessClearance extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'citizen_id',
        'business_name',
        'address',
        'business_type',
        'manager',
        'residence_address',
        'applied_for',
        'cert_no',
        'or_no',
        'amount_paid',
        'control_no',
    ];


    public function citizen() : BelongsTo {
        return $this->belongsTo(Citizen::class);
    }
}
