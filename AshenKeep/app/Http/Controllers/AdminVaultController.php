<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Vault;
class AdminVaultController extends Controller
{
    public function viewAdminVaults()
    {
        // Fetch all vaults from the database
        $vaults = Vault::all();
        // Return the view and pass the vaults data to it
        return view('admin_vault', compact('vaults'));
    }
}