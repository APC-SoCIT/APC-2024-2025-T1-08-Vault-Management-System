<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicants;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicant=Applicants::all();
        return view('home');
    }
    public function create(Request $request)
    {
       // Create a new instance of the Student model
       $applicant = new Applicants;
       $applicant->full_name = $request->full_name;
        $applicant->permanent_address = $request->permanent_address;
        $applicant->current_address = $request->current_address;
        $applicant->provincial_address = $request->provincial_address;
        $applicant->email = $request->email;
        $applicant->landline_number = $request->landline_number;
        $applicant->mobile_number = $request->mobile_number;
        $applicant->date_of_birth = $request->date_of_birth;
        $applicant->place_of_birth = $request->place_of_birth;
        $applicant->citizenship = $request->citizenship;
        $applicant->place_of_catholic_baptism = $request->place_of_catholic_baptism;
        $applicant->date_of_catholic_baptism = $request->date_of_catholic_baptism;
        $applicant->religious_organization_affiliated_with = $request->religious_organization_affiliated_with;
        $applicant->donors_occupation = $request->donors_occupation;
        $applicant->employers_name_or_business_name = $request->employers_name_or_business_name;
        $applicant->business_address = $request->business_address;
        $applicant->employers_email_or_business_email_address = $request->employers_email_or_business_email_address;
        $applicant->business_landline_number = $request->business_landline_number;
        $applicant->business_mobile_number = $request->business_mobile_number;
        $applicant->position = $request->position;
        $applicant->years_in_employment_or_business = $request->years_in_employment_or_business;
        $applicant->spouses_name = $request->spouses_name;
        $applicant->spouses_date_of_birth = $request->spouses_date_of_birth;
        $applicant->spouses_place_of_birth = $request->spouses_place_of_birth;
        $applicant->spouses_email_address = $request->spouses_email_address;
        $applicant->spouses_landline_number = $request->spouses_landline_number;
        $applicant->spouses_mobile_number = $request->spouses_mobile_number;
        $applicant->fathers_name = $request->fathers_name;
        $applicant->fathers_email_address = $request->fathers_email_address;
        $applicant->fathers_landline_number = $request->fathers_landline_number;
        $applicant->fathers_mobile_number = $request->fathers_mobile_number;
        $applicant->mothers_name = $request->mothers_name;
        $applicant->mothers_email_address = $request->mothers_email_address;
        $applicant->mothers_landline_number = $request->mothers_landline_number;
        $applicant->mothers_mobile_number = $request->mothers_mobile_number;

        $applicant->save();

        return redirect(route('index'))->with('status', 'Applied!! Wait for approval!!');
    }

    public function show()
    {
        $applicant=Applicants::all();
        return view('show', compact('applicant'));
    }
}
