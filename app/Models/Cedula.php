<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
