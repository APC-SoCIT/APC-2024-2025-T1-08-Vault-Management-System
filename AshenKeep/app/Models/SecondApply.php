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
        'currregion', 'currprovince', 'currcity', 'currbarangay', 'currstreet',
        'permregion', 'permprovince', 'permcity', 'permbarangay', 'permstreet',
        'provregion', 'provprovince', 'provcity', 'provbarangay', 'provstreet',
        'status'
        
    ];
}
