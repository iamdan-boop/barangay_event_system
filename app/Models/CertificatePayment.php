<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\CertificatePayment
 *
 * @property int $id
 * @property string $agency
 * @property string $fund
 * @property string $payment_method
 * @property string $certificate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $drawee_bank
 * @property string|null $drawee_bank_number
 * @property \Illuminate\Support\Carbon|null $drawee_bank_date
 * @property string $payor
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment query()
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment whereAgency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment whereCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment whereDraweeBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment whereDraweeBankDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment whereDraweeBankNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment whereFund($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment wherePayor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $citizen_id
 * @method static \Illuminate\Database\Eloquent\Builder|CertificatePayment whereCitizenId($value)
 * @property-read \App\Models\Citizen $citizen
 */
class CertificatePayment extends Model
{
    use HasFactory;


    protected $fillable = [
        'agency',
        'citizen_id',
        'fund',
        'payment_method',
        'certificate',
        'drawee_bank',
        'drawee_bank_number',
        'drawee_bank_date',
    ];


    protected $dates = [
        'drawee_bank_date'
    ];

    public function citizen() : BelongsTo {
        return $this->belongsTo(Citizen::class);
    }
}
