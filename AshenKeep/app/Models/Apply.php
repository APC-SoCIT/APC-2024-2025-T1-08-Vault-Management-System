<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;

    // Define which fields are mass assignable
    protected $table = 'applications';
    protected $fillable = [
        'full_name',
        'status',
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
        'religious_organization_affiliated_with',
        'spouses_name',
        'spouses_date_of_birth',
        'spouses_place_of_birth',
        'spouses_email_address',
        'spouses_landline_number',
        'spouses_mobile_number',
    ];

    // If you're using relationships, define them here, for example:
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
