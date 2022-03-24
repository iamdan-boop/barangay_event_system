<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\TaxPayment
 *
 * @property int $id
 * @property string $agency
 * @property string $payor
 * @property string $fund
 * @property string $payment_method
 * @property string|null $drawee_bank
 * @property string|null $drawee_bank_number
 * @property string|null $drawee_bank_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nature_of_collection
 * @property string $account_code
 * @property float $amount
 * @property mixed $0
 * @method static \Database\Factories\TaxPaymentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment query()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment whereAccountCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment whereAgency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment whereDraweeBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment whereDraweeBankDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment whereDraweeBankNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment whereFund($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment whereNatureOfCollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment wherePayor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $citizen_id
 * @method static \Illuminate\Database\Eloquent\Builder|TaxPayment whereCitizenId($value)
 * @property-read \App\Models\Citizen $citizen
 */
class TaxPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency',
        'citizen_id',
        'nature_of_collection',
        'account_code',
        'amount',
        'fund',
        'payment_method',
        'drawee_bank',
        'drawee_bank_number',
        'drawee_bank_date'
    ];


    protected $casts = [
        'drawee_bank_date'
    ];


    public function citizen(): BelongsTo
    {
        return $this->belongsTo(Citizen::class);
    }
}
