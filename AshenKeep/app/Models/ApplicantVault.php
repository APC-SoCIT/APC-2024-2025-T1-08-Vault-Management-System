<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 
class ApplicantVault extends Model
{
 
    // Define the fillable fields for mass assignment
    protected $fillable = [
        'vault_number',
        'price',
    ];
}
