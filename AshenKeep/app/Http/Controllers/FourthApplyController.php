<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FourthApply;
use Illuminate\Support\Facades\Auth;

class FourthApplyController extends Controller
{
    public function create() {
        return view('fourth-apply');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fathers_name' => 'required|string',
            'mothers_name' => 'required|string',
        ]);

        $spouses_names = is_array($request->spouses_name) ? $request->spouses_name : [$request->spouses_name];

        foreach ($spouses_names as $spouse_name) {
            FourthApply::create([
                'user_id' => Auth::id(),
                'spouses_name' => $spouse_name,
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

        return redirect()->back()->with('success', 'Application submitted successfully.');
    }
    
}