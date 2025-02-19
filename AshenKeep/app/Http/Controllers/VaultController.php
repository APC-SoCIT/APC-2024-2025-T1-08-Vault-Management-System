<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vault;

class VaultController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get the authenticated user

        if ($user->hasRole('Admin')) {
            // Fetch admin vaults with pagination
            $vaults = Vault::paginate(5);
            return view('admin_vault', compact('vaults'));
        } else {
            // Fetch all applicant vaults
            $vaults = Vault::all();
            return view('applicant_vault', compact('vaults'));
        }
    }
}
