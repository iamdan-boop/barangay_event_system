<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
