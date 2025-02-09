<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FirstBeneficiary extends Model
{
    protected $table = 'firstbeneficiary';
    protected $fillable = [
        'full_name',
        'user_id',
        'permanent_address',
        'current_address',
        'provincial_address',
        'email',
        'landline_number',
        'mobile_number',
        'date_of_birth',
        'place_of_birth',
        'citizenship',
        'place_of_catholic_baptism',
        'date_of_catholic_baptism',
    ];
}
