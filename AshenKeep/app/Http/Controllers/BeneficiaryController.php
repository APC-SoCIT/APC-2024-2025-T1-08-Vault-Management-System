<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FirstBeneficiary;
use App\Models\SecondBeneficiary;
use App\Models\ThirdBeneficiary;

class BeneficiaryController extends Controller
{
    public function page6()
    {
        return view('sixth-apply');
    }

    // Handle the form submission and save the data
    public function savePage6(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255',
            'current_address' => 'required|string|max:255',
            'provincial_address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'landline_number' => 'nullable|string|max:20',
            'mobile_number' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'place_of_catholic_baptism' => 'nullable|string|max:255',
            'date_of_catholic_baptism' => 'nullable|date',
        ]);

        // Add the user_id to the data before saving
        $data = $request->only([
            'full_name', 'permanent_address', 'current_address', 'provincial_address', 'email', 
            'landline_number', 'mobile_number', 'date_of_birth', 'place_of_birth', 'citizenship',
            'place_of_catholic_baptism', 'date_of_catholic_baptism'
        ]);
        $data['user_id'] = auth()->id(); // Set the user_id to the logged-in user's ID

        // Save the data in the database
        FirstBeneficiary::create($data);

        return redirect()->route('applicant.page7')->with('status', 'Application submitted successfully!');
    }

    public function page7()
    {
        return view('seventh-apply');
    }

    // Handle the form submission and save the data
    public function savePage7(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255',
            'current_address' => 'required|string|max:255',
            'provincial_address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'landline_number' => 'nullable|string|max:20',
            'mobile_number' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'place_of_catholic_baptism' => 'nullable|string|max:255',
            'date_of_catholic_baptism' => 'nullable|date',
        ]);

        // Add the user_id to the data before saving
        $data = $request->only([
            'full_name', 'permanent_address', 'current_address', 'provincial_address', 'email', 
            'landline_number', 'mobile_number', 'date_of_birth', 'place_of_birth', 'citizenship',
            'place_of_catholic_baptism', 'date_of_catholic_baptism'
        ]);
        $data['user_id'] = auth()->id(); // Set the user_id to the logged-in user's ID

        // Save the data in the database
        SecondBeneficiary::create($data);

        return redirect()->route('applicant.page8')->with('status', 'Application submitted successfully!');
    }

    public function page8()
    {
        return view('eigth-apply');
    }

    // Handle the form submission and save the data
    public function savePage8(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255',
            'current_address' => 'required|string|max:255',
            'provincial_address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'landline_number' => 'nullable|string|max:20',
            'mobile_number' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'place_of_catholic_baptism' => 'nullable|string|max:255',
            'date_of_catholic_baptism' => 'nullable|date',
        ]);

        // Add the user_id to the data before saving
        $data = $request->only([
            'full_name', 'permanent_address', 'current_address', 'provincial_address', 'email', 
            'landline_number', 'mobile_number', 'date_of_birth', 'place_of_birth', 'citizenship',
            'place_of_catholic_baptism', 'date_of_catholic_baptism'
        ]);
        $data['user_id'] = auth()->id(); // Set the user_id to the logged-in user's ID

        // Save the data in the database
        ThirdBeneficiary::create($data);

        return redirect()->route('applicant.success')->with('status', 'Application submitted successfully!');
    }

    public function success()
    {
        return view('success');
    }
}
