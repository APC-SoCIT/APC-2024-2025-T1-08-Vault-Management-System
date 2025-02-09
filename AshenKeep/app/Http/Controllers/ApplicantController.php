<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicants;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    /**
     * Check if the logged-in user has a pending application.
     */
    private function userHasPendingApplication()
    {
        return Applicants::where('user_id', Auth::id())
            ->where('status', 'pending')
            ->exists();
    }

    /**
     * Step 1: Show the first page
     */
    public function page1()
{
    $user = Auth::user();

    // Authentication and role check
    if (!$user || !$user->hasRole('Applicant')) {
        abort(403, 'Forbidden'); // Only applicants can access this page
    }

    // Check if user has a pending application
    if ($this->userHasPendingApplication()) {
        return redirect()->route('with.existing')->with('error', 'You already have a pending application.');
    }

    return view('apply');
}

    public function savePage1(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255',
            'current_address' => 'required|string|max:255',
            'provincial_address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'landline_number' => 'nullable|string|max:20',
            'mobile_number' => 'required|string|max:20',
        ]);

        session()->put('applicant', $request->only([
            'full_name', 'permanent_address', 'current_address',
            'provincial_address', 'email', 'landline_number', 'mobile_number',
        ]));

        return redirect()->route('applicant.page2');
    }

    /**
     * Step 2: Show the second page
     */
    public function page2()
    {
        if (!session()->has('applicant')) {
            return redirect()->route('applicant.page1')->with('error', 'Please complete the previous step first.');
        }

        return view('second-apply');
    }

    public function savePage2(Request $request)
    {
        $request->validate([
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'place_of_catholic_baptism' => 'nullable|string|max:255',
            'date_of_catholic_baptism' => 'nullable|date',
            'religious_organization_affiliated_with' => 'nullable|string|max:255',
        ]);

        session()->put('applicant', array_merge(session('applicant', []), $request->only([
            'date_of_birth', 'place_of_birth', 'citizenship',
            'place_of_catholic_baptism', 'date_of_catholic_baptism',
            'religious_organization_affiliated_with',
        ])));

        return redirect()->route('applicant.page3');
    }

    /**
     * Step 3: Show the third page
     */
    public function page3()
    {
        if (!session()->has('applicant')) {
            return redirect()->route('applicant.page1')->with('error', 'Please complete the previous step first.');
        }

        return view('third-apply');
    }

    public function savePage3(Request $request)
    {
        $request->validate([
            'donors_occupation' => 'nullable|string|max:255',
            'employers_name_or_business_name' => 'nullable|string|max:255',
            'business_address' => 'nullable|string|max:255',
            'employers_email_or_business_email_address' => 'nullable|email|max:255',
            'business_landline_number' => 'nullable|string|max:20',
            'business_mobile_number' => 'nullable|string|max:20',
            'position' => 'nullable|string|max:255',
            'years_in_employment_or_business' => 'nullable|numeric',
        ]);

        session()->put('applicant', array_merge(session('applicant', []), $request->only([
            'donors_occupation', 'employers_name_or_business_name', 'business_address',
            'employers_email_or_business_email_address', 'business_landline_number',
            'business_mobile_number', 'position', 'years_in_employment_or_business',
        ])));

        return redirect()->route('applicant.page4');
    }

    /**
     * Step 4: Show the fourth page
     */
    public function page4()
    {
        if (!session()->has('applicant')) {
            return redirect()->route('applicant.page1')->with('error', 'Please complete the previous step first.');
        }

        return view('fourth-apply');
    }

    public function savePage4(Request $request)
    {
        $request->validate([
            'spouses_name' => 'nullable|string|max:255',
            'spouses_date_of_birth' => 'nullable|date',
            'spouses_place_of_birth' => 'nullable|string|max:255',
            'spouses_email_address' => 'nullable|email|max:255',
            'spouses_landline_number' => 'nullable|string|max:20',
            'spouses_mobile_number' => 'nullable|string|max:20',
        ]);

        session()->put('applicant', array_merge(session('applicant', []), $request->only([
            'spouses_name', 'spouses_date_of_birth', 'spouses_place_of_birth',
            'spouses_email_address', 'spouses_landline_number', 'spouses_mobile_number',
        ])));

        return redirect()->route('applicant.page5');
    }

    /**
     * Step 5: Show the fifth page
     */
    public function savePage5(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'fathers_name' => 'nullable|string|max:255',
        'fathers_email_address' => 'nullable|email|max:255',
        'fathers_landline_number' => 'nullable|string|max:20',
        'fathers_mobile_number' => 'nullable|string|max:20',
        'mothers_name' => 'nullable|string|max:255',
        'mothers_email_address' => 'nullable|email|max:255',
        'mothers_landline_number' => 'nullable|string|max:20',
        'mothers_mobile_number' => 'nullable|string|max:20',
    ]);

    // Get the existing session data and merge it with the new input
    session()->put('applicant', array_merge(session('applicant', []), $request->only([
        'fathers_name', 'fathers_email_address', 'fathers_landline_number', 'fathers_mobile_number',
        'mothers_name', 'mothers_email_address', 'mothers_landline_number', 'mothers_mobile_number'
    ])));

    // Retrieve the updated session data
    $data = session('applicant');
    $data['user_id'] = Auth::id();
    $data['status'] = 'pending'; // Ensure status is set

    // Create the applicant record in the database
    Applicants::create($data);

    // Clear session after submission
    session()->forget('applicant');

    // Redirect to the next page
    return redirect()->route('applicant.page6')->with('status', 'Application submitted successfully!');
}

    /**
     * Success page
     */
    public function success()
    {
        return view('sixth-apply');
    }

    /**
     * View all applicants (for staff)
     */
    public function index()
    {
        $applicants = Applicants::all();
        return view('office-staff-application', compact('applicants'));
    }

    /**
     * Cancel application process (clears session)
     */
    public function cancel()
    {
        session()->forget('applicant');
        return redirect()->route('applicant.page1')->with('status', 'Application process restarted.');
    }
}
