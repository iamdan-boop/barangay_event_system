<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency',
        'payor',
        'fund',
        'payment_method',
        'drawee_bank',
        'drawee_bank_number',
        'drawee_bank_date'
    ];


    protected $casts = [
        'drawee_bank_date'
    ];
}
