<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplicantVault;
 
class ApplicantVaultController extends Controller
{
   
    public function index()
    {
        $applicantVaults=ApplicantVault::all();
        return view('applicant_vault', compact('applicantVaults'));
    }
}