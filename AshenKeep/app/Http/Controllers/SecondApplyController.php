<?php

namespace App\Http\Controllers;

use App\Models\SecondApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecondApplyController extends Controller
{
    public function index()
    {
        
    }

    public function store (Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'permanent_address' => 'required|string|max:255',
            'current_address' => 'required|string|max:255',
            'provincial_address' => 'required|string|max:255',
            'status' => 'nullable|string|max:50',
        ]);

        SecondApply::create([
            'user_id' => Auth::id(),
            'permanent_address' => $request->permanent_address,
            'current_address' => $request->current_address,
            'provincial_address' => $request->provincial_address,
            'status' => 'pending',
        ]);

        return redirect()->route('applications.index')->with('success', 'Application submitted successfully.');
    }
}
