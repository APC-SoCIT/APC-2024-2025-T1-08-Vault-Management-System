<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vault extends Model
{
    protected $table = 'vaults'; 

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'vault_number',
        'price',
        'location',
        'vault_owner_id',
        'owner',
        'date_issued',
        'urns_quantity',
        'availability',
    ];
}