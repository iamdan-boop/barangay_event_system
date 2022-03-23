<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;


    protected $fillable = [
        'status_id',
        'first_name',
        'middle_name',
        'last_name',
        'contact',
        'gender',
        'dob',
        'status',
        'citizenship',
        'occupation',
        'zone',
        'address',
    ];


    protected $dates = [
        'dob'
    ];
}
