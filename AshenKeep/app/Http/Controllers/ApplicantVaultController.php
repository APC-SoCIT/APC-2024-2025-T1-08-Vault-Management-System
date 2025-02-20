<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Vault;
class ApplicantVaultController extends Controller
{
    public function viewApplicantVaults()
    {
        $vaults = Vault::all();  
        return view('applicant_vault', compact('vaults'));
    }
}