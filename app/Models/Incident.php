<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_incident',
        'time_incident',
        'location',
        'type_incident',
        'people_involve',
        'details_incident'
    ];


    protected $dates = [
        'date_incident',
        'time_incident'
    ];
}
