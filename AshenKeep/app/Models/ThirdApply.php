<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThirdApply extends Model
{
    protected $table = 'application_third_step';
    protected $fillable = [
        'status',
        'user_id',
        'donors_occupation',
        'employers_name_or_business_name',
        'business_address',
        'employers_email_or_business_email_address',
        'business_landline_number',
        'business_mobile_number',
        'position',
        'years_in_employment_or_business'
    ];
}
