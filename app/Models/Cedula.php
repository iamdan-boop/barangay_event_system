<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Cedula
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Cedula newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cedula newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cedula query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cedula whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cedula whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cedula whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Cedula extends Model
{
    use HasFactory;


    protected $fillable = [
        'citizen_id',
        'certificate_id',
        'tin_cedula',
        'icr',
        'birthplace_cedula',
        'height_cedula',
        'weight_cedula',
        'basictax',
        'grossreceipt_taxable',
        'salary_taxable',
        'income_taxable',
        'interest_cedula',
        'status_id',
        'qr_codes',
        'control_number',
    ];
}
