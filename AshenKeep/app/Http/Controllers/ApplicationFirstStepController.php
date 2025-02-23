<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apply;
use App\Models\Vault;

class ApplicationFirstStepController extends Controller
{
    public function create()
{
    $vaults = Vault::all();
    return view('application-first-step', compact('vaults'));
}

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:application_first_step,email',
            'mobile_number' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'place_of_catholic_baptism' => 'required|string|max:255',
            'date_of_catholic_baptism' => 'required|date',
            'religious_organization_affiliated_with' => 'required|string|max:255',
            'vault_id' => 'required|exists:vaults,id', // Ensure the vault exists
        ]);

        $validatedData['user_id'] = auth()->id();
        $validatedData['status'] = 'pending';

        Apply::create($validatedData);

        return view('success');
    }
}
