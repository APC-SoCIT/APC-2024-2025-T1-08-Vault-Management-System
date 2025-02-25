<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecondApply;
use Illuminate\Support\Facades\Auth;

class SecondApplyController extends Controller
{
    public function create() {
        $address = SecondApply::where('user_id', Auth::id())->first() ?? new SecondApply();
        return view('second-apply', compact('address'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'current_address' => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255',
            'provincial_address' => 'required|string|max:255',
        ]);

        $addresses = is_array($request->current_address) ? $request->current_address : [$request->current_address];

        foreach ($addresses as $index => $current_address) {
            SecondApply::create([
                'user_id' => Auth::id(),
                'current_address' => $current_address,
                'currregion' => $request->currregion[$index] ?? null,
                'currprovince' => $request->currprovince[$index] ?? null,
                'currcity' => $request->currcity[$index] ?? null,
                'currbarangay' => $request->currbarangay[$index] ?? null,
                'currstreet' => $request->currstreet[$index] ?? null,
                
                'permanent_address' => $request->permanent_address,
                'permregion' => $request->permregion ?? null,
                'permprovince' => $request->permprovince ?? null,
                'permcity' => $request->permcity ?? null,
                'permbarangay' => $request->permbarangay ?? null,
                'permstreet' => $request->permstreet ?? null,
                
                'provincial_address' => $request->provincial_address,
                'provregion' => $request->provregion ?? null,
                'provprovince' => $request->provprovince ?? null,
                'provcity' => $request->provcity ?? null,
                'provbarangay' => $request->provbarangay ?? null,
                'provstreet' => $request->provstreet ?? null,
                
                'status' => 'pending',
            ]);
        }

        return redirect()->back()->with('success', 'Application submitted successfully.');
    }
}
