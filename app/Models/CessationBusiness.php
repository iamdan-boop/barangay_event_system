<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
