<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\CessationBusiness
 *
 * @property int $id
 * @property int $citizen_id
 * @property string $business_name
 * @property string $address
 * @property string $business_owner
 * @property string $owner_address
 * @property \Illuminate\Support\Carbon $cessation_date
 * @property string $purpose
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Citizen $citizen
 * @method static \Database\Factories\CessationBusinessFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CessationBusiness newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CessationBusiness newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CessationBusiness query()
 * @method static \Illuminate\Database\Eloquent\Builder|CessationBusiness whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CessationBusiness whereBusinessName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CessationBusiness whereBusinessOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CessationBusiness whereCessationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CessationBusiness whereCitizenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CessationBusiness whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CessationBusiness whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CessationBusiness whereOwnerAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CessationBusiness wherePurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CessationBusiness whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CessationBusiness extends Model
{
    use HasFactory;


    protected $fillable = [
        'citizen_id',
        'business_name',
        'address',
        'business_owner',
        'owner_address',
        'cessation_date',
        'purpose',
    ];

    protected $dates = [
        'cessation_date'
    ];


    public function citizen() : BelongsTo {
        return $this->belongsTo(Citizen::class);
    }
}
