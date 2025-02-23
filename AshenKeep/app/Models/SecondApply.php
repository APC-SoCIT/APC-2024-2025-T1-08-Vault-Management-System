<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecondApply extends Model
{
    protected $table = 'secondapply';
    protected $fillable = [
        'user_id',
        'permanent_address',
        'current_address',
        'provincial_address',
        'status'
        
    ];
}
