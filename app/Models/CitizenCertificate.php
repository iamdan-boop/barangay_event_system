<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
