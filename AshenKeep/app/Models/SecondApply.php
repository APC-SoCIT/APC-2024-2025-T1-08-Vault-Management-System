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
        'current_address', 'currregion', 'currprovince', 'currcity', 'currbarangay', 'currstreet',
        'permanent_address', 'permregion', 'permprovince', 'permcity', 'permbarangay', 'permstreet',
        'provincial_address', 'provregion', 'provprovince', 'provcity', 'provbarangay', 'provstreet',
        'status'
        
    ];
}
