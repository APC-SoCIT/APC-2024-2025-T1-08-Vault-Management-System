<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $table = 'beneficiary';
    protected $fillable = [
        'status',
        'user_id',
        'first_full_name',
        'first_permanent_address',
        'first_current_address',
        'first_provincial_address',
        'first_email',
        'first_landline_number',
        'first_mobile_number',
        'first_date_of_birth',
        'first_place_of_birth',
        'first_citizenship',
        'first_place_of_catholic_baptism',
        'first_date_of_catholic_baptism',

        'second_full_name',
        'second_permanent_address',
        'second_current_address',
        'second_provincial_address',
        'second_email',
        'second_landline_number',
        'second_mobile_number',
        'second_date_of_birth',
        'second_place_of_birth',
        'second_citizenship',
        'second_place_of_catholic_baptism',
        'second_date_of_catholic_baptism',

        'third_full_name',
        'third_permanent_address',
        'third_current_address',
        'third_provincial_address',
        'third_email',
        'third_landline_number',
        'third_mobile_number',
        'third_date_of_birth',
        'third_place_of_birth',
        'third_citizenship',
        'third_place_of_catholic_baptism',
        'third_date_of_catholic_baptism',
    ];
}
