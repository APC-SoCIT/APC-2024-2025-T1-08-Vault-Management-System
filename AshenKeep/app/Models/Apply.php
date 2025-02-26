<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;

    protected $table = 'application_first_step';

    protected $fillable = [
        'full_name', 'status', 'user_id', 'email', 'mobile_number', 'vault_id',
        'permanent_address', 'current_address', 'provincial_address',
        'landline_number', 'date_of_birth', 'place_of_birth', 'citizenship',
        'place_of_catholic_baptism', 'date_of_catholic_baptism',
        'religious_organization_affiliated_with'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function secondApply()
    {
        return $this->hasOne(SecondApply::class, 'user_id', 'user_id');
    }

    public function thirdApply()
    {
        return $this->hasOne(ThirdApply::class, 'user_id', 'user_id');
    }

    public function fourthApply()
    {
        return $this->hasOne(FourthApply::class, 'user_id', 'user_id');
    }

    public function beneficiary()
    {
        return $this->hasOne(Beneficiary::class, 'user_id', 'user_id');
    }
}

