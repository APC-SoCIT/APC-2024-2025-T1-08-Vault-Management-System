<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apply;

class StaffApplyController extends Controller
{
    public function index()
    {
        $applications = Apply::all();
        return view('office-staff-application', compact('applications'));
    }

     /**
     * Show the details of a specific patient.
     */
}
