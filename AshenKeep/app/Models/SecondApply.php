<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondApply extends Model
{
    use HasFactory;

    protected $table = 'second_apply';
    protected $fillable = [
        'user_id',
        'permanent_address',
        'current_address',
        'provincial_address',
        'status'
        
    ];
}
