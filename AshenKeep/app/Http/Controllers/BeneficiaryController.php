<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beneficiary;
use Illuminate\Support\Facades\Auth;

class BeneficiaryController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        
        // Ensure the user is authenticated and has the 'Applicant' role
        if (!$user || !$user->hasRole('Applicant')) {
            abort(403); // Forbidden
        }
        
        // Check if the user already has an application
        if (Beneficiary::where('user_id', $user->id)->exists()) {
            return redirect()->back()->with('error', 'You are already done with that step.');
        }

        return view('fifth-apply');
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        
        // Ensure the user can only submit one application
        if (Beneficiary::where('user_id', $user->id)->exists()) {
            return redirect()->back()->with('error', 'You have already submitted an application.');
        }

        $validatedData = $request->validate([
            'first_full_name' => 'required|string|max:255',
            'first_permanent_address' => 'required|string|max:255',
            'first_current_address' => 'required|string|max:255',
            'first_provincial_address'  => 'required|string|max:255',
            'first_email' => 'required|email',
            'first_mobile_number' => 'required|string|max:20',
            'first_date_of_birth' => 'required|date',
            'first_place_of_birth' => 'required|string|max:255',
            'first_citizenship' => 'required|string|max:255',
            'first_place_of_catholic_baptism' => 'required|string|max:255',
            'first_date_of_catholic_baptism' => 'required|date',

            'second_full_name' => 'required|string|max:255',
            'second_permanent_address' => 'required|string|max:255',
            'second_current_address' => 'required|string|max:255',
            'second_provincial_address'  => 'required|string|max:255',
            'second_email' => 'required|email',
            'second_mobile_number' => 'required|string|max:20',
            'second_date_of_birth' => 'required|date',
            'second_place_of_birth' => 'required|string|max:255',
            'second_citizenship' => 'required|string|max:255',
            'second_place_of_catholic_baptism' => 'required|string|max:255',
            'second_date_of_catholic_baptism' => 'required|date',

            'third_full_name' => 'required|string|max:255',
            'third_permanent_address' => 'required|string|max:255',
            'third_current_address' => 'required|string|max:255',
            'third_provincial_address'  => 'required|string|max:255',
            'third_email' => 'required|email',
            'third_mobile_number' => 'required|string|max:20',
            'third_date_of_birth' => 'required|date',
            'third_place_of_birth' => 'required|string|max:255',
            'third_citizenship' => 'required|string|max:255',
            'third_place_of_catholic_baptism' => 'required|string|max:255',
            'third_date_of_catholic_baptism' => 'required|date',
        ]);

        $validatedData['user_id'] = $user->id;
        $validatedData['status'] = 'pending';

        Beneficiary::create($validatedData);

        return view('apply-choice')->with('success', 'Application submitted successfully.');
    }
}
