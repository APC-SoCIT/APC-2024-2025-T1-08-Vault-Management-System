<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminVault;
 
class AdminVaultController extends Controller
{
   
    public function index()
    {
        $adminVaults=AdminVault::all();
        return view('admin_vault', compact('adminVaults'));
    }
}