<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourthApply extends Model
{
    use HasFactory;

    protected $table = 'fourth_apply';

    protected $fillable = [
        'user_id',
        'spouses_name',
        'spouses_date_of_birth',
        'spouses_place_of_birth',
        'spouses_email_address',
        'spouses_landline_number',
        'spouses_mobile_number',
        'fathers_name',
        'fathers_email_address',
        'fathers_landline_number',
        'fathers_mobile_number',
        'mothers_name',
        'mothers_email_address',
        'mothers_landline_number',
        'mothers_mobile_number',
        'status'
    ];
}
