<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    public function citizenCertificates(): BelongsToMany
    {
        return $this->hasMany(CitizenCertificate::class);
    }
}
