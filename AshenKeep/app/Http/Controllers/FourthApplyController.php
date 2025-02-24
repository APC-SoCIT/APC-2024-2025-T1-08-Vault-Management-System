<?php

namespace App\Http\Controllers;

use App\Models\FourthApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FourthApplyController extends Controller
{
    public function index()
    {
        return FourthApply::all();
    }

    /**
     * Store a new application.
     */
    public function store(Request $request)
    {
        $request->validate([
            'spouses_name' => 'nullable|string|max:255',
            'spouses_date_of_birth' => 'nullable|date',
            'spouses_place_of_birth' => 'nullable|string|max:255',
            'spouses_email_address' => 'nullable|email|max:255',
            'spouses_landline_number' => 'nullable|string|max:20',
            'spouses_mobile_number' => 'nullable|string|max:20',
            'fathers_name' => 'required|string|max:255',
            'fathers_email_address' => 'nullable|email|max:255',
            'fathers_landline_number' => 'nullable|string|max:20',
            'fathers_mobile_number' => 'nullable|string|max:20',
            'mothers_name' => 'required|string|max:255',
            'mothers_email_address' => 'nullable|email|max:255',
            'mothers_landline_number' => 'nullable|string|max:20',
            'mothers_mobile_number' => 'nullable|string|max:20',
            'status' => 'nullable|string|max:50',
        ]);

        $application = FourthApply::create([
            'user_id' => Auth::id(),
            'spouses_name' => $request->spouses_name,
            'spouses_date_of_birth' => $request->spouses_date_of_birth,
            'spouses_place_of_birth' => $request->spouses_place_of_birth,
            'spouses_email_address' => $request->spouses_email_address,
            'spouses_landline_number' => $request->spouses_landline_number,
            'spouses_mobile_number' => $request->spouses_mobile_number,
            'fathers_name' => $request->fathers_name,
            'fathers_email_address' => $request->fathers_email_address,
            'fathers_landline_number' => $request->fathers_landline_number,
            'fathers_mobile_number' => $request->fathers_mobile_number,
            'mothers_name' => $request->mothers_name,
            'mothers_email_address' => $request->mothers_email_address,
            'mothers_landline_number' => $request->mothers_landline_number,
            'mothers_mobile_number' => $request->mothers_mobile_number,
            'status' => 'pending',
        ]);

}
