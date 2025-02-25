<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThirdApply;
use Illuminate\Support\Facades\Auth;

class ThirdApplyController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        
        // Ensure the user is authenticated and has the 'Applicant' role
        if (!$user || !$user->hasRole('Applicant')) {
            abort(403); // Forbidden
        }
        
        // Check if the user already has an application
        if (ThirdApply::where('user_id', $user->id)->exists()) {
            return redirect()->back()->with('error', 'You are already done with that step.');
        }

        return view('application-third-step');
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        
        // Ensure the user can only submit one application
        if (ThirdApply::where('user_id', $user->id)->exists()) {
            return redirect()->back()->with('error', 'You have already submitted an application.');
        }

        $validatedData = $request->validate([
            'donors_occupation' => 'nullable|string|max:255',
            'employers_name_or_business_name' => 'nullable|string|max:255',
            'business_address' => 'nullable|string|max:255',
            'employers_email_or_business_email_address' => 'nullable|email|max:255',
            'business_landline_number' => 'nullable|string|max:20',
            'business_mobile_number' => 'nullable|string|max:20',
            'position' => 'nullable|string|max:255',
            'years_in_employment_or_business' => 'nullable|numeric',
        ]);

        $validatedData['user_id'] = $user->id;
        $validatedData['status'] = 'pending';

        ThirdApply::create($validatedData);

        return view('success');
    }
}
