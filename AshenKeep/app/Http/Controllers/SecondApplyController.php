<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecondApply;
use Illuminate\Support\Facades\Auth;

class SecondApplyController extends Controller
{
    public function create() {
        $addresses = SecondApply::where('user_id', Auth::id())->first() ?? new SecondApply();
        return view('second-apply', compact('addresses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'currregion' => 'required|string|max:255',
            'currprovince' => 'required|string|max:255',
            'currcity' => 'required|string|max:255',
            'currbarangay' => 'required|string|max:255',
            'currstreet' => 'required|string|max:255',

            'permregion' => 'required|string|max:255',
            'permprovince' => 'required|string|max:255',
            'permcity' => 'required|string|max:255',
            'permbarangay' => 'required|string|max:255',
            'permstreet' => 'required|string|max:255',

            'provregion' => 'required|string|max:255',
            'provprovince' => 'required|string|max:255',
            'provcity' => 'required|string|max:255',
            'provbarangay' => 'required|string|max:255',
            'provstreet' => 'required|string|max:255',
            


        ]);
    
        SecondApply::create([
            'user_id' => Auth::id(),
            'currregion' => $request->currregion,
            'currprovince' => $request->currprovince,
            'currcity' => $request->currcity,
            'currbarangay' => $request->currbarangay,
            'currstreet' => $request->currstreet,
        
            'permregion' => $request->permregion,
            'permprovince' => $request->permprovince,
            'permcity' => $request->permcity,
            'permbarangay' => $request->permbarangay,
            'permstreet' => $request->permstreet,
        
            'provregion' => $request->provregion,
            'provprovince' => $request->provprovince,
            'provcity' => $request->provcity,
            'provbarangay' => $request->provbarangay,
            'provstreet' => $request->provstreet,
        
            'status' => 'pending',
        ]);
    
        return view('apply-choice')->with('success', 'Application submitted successfully.');
    }
}
