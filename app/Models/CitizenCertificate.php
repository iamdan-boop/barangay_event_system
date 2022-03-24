<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\CitizenCertificate
 *
 * @property int $id
 * @property int $citizen_id
 * @property int $certificate_id
 * @property float $community_tax
 * @property float $amount_paid
 * @property string $purpose
 * @property string $qr_codes
 * @property int $status_id
 * @property string $control_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Certificate $certificates
 * @property-read \App\Models\Citizen $citizen
 * @method static \Database\Factories\CitizenCertificateFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate query()
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate whereAmountPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate whereCertificateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate whereCitizenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate whereCommunityTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate whereControlNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate wherePurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate whereQrCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CitizenCertificate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CitizenCertificate extends Model
{
    use HasFactory;


    protected $fillable = [
        'citizen_id',
        'certificate_id',
        'community_tax',
        'amount_paid',
        'purpose',
        'status_id',
        'qr_codes',
        'control_number',
    ];


    public function citizen() : BelongsTo {
        return $this->belongsTo(Citizen::class);
    }

    public function certificates(): BelongsTo
    {
        return $this->belongsTo(Certificate::class, 'certificate_id', 'id');
    }
}
