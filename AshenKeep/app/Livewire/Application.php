<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Apply;
use Illuminate\Support\Facades\Auth;

class Application extends Component
{
    public $full_name;
    public $status = 'pending'; // Default value for status
    public $user_id;
    public $permanent_address;
    public $current_address;
    public $provincial_address;
    public $email;
    public $landline_number;
    public $mobile_number;
    public $date_of_birth;
    public $place_of_birth;
    public $citizenship;
    public $place_of_catholic_baptism;
    public $date_of_catholic_baptism;
    public $religious_organization_affiliated_with;
    public $spouses_name;
    public $spouses_date_of_birth;
    public $spouses_place_of_birth;
    public $spouses_email_address;
    public $spouses_landline_number;
    public $spouses_mobile_number;

    protected $rules = [
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|unique:applications,email',
        'landline_number' => 'nullable|string|max:20',
        'mobile_number' => 'nullable|string|max:20',
        'date_of_birth' => 'required|date',
        'place_of_birth' => 'required|string|max:255',
        'citizenship' => 'required|string|max:255',
        'place_of_catholic_baptism' => 'nullable|string|max:255',
        'date_of_catholic_baptism' => 'nullable|date',
        'religious_organization_affiliated_with' => 'nullable|string|max:255',
        'spouses_name' => 'nullable|string|max:255',
        'spouses_date_of_birth' => 'nullable|date',
        'spouses_place_of_birth' => 'nullable|string|max:255',
        'spouses_email_address' => 'nullable|email',
        'spouses_landline_number' => 'nullable|string|max:20',
        'spouses_mobile_number' => 'nullable|string|max:20',
    ];

    public function mount()
    {
        // Automatically set the user_id to the authenticated user's ID
        $this->user_id = auth()->id();
    
        // Automatically set the email to the authenticated user's email
        $this->email = auth()->user()->email;
    }

    public function submitForm()
    {
        // Validate the form data
        $this->validate();

        // Store the applicant's data
        Apply::create([
            'full_name' => $this->full_name,
            'status' => $this->status, // Default value 'pending'
            'user_id' => $this->user_id, // Assign the authenticated user's ID
            'permanent_address' => $this->permanent_address,
            'current_address' => $this->current_address,
            'provincial_address' => $this->provincial_address,
            'email' => $this->email,
            'landline_number' => $this->landline_number,
            'mobile_number' => $this->mobile_number,
            'date_of_birth' => $this->date_of_birth,
            'place_of_birth' => $this->place_of_birth,
            'citizenship' => $this->citizenship,
            'place_of_catholic_baptism' => $this->place_of_catholic_baptism,
            'date_of_catholic_baptism' => $this->date_of_catholic_baptism,
            'religious_organization_affiliated_with' => $this->religious_organization_affiliated_with,
            'spouses_name' => $this->spouses_name,
            'spouses_date_of_birth' => $this->spouses_date_of_birth,
            'spouses_place_of_birth' => $this->spouses_place_of_birth,
            'spouses_email_address' => $this->spouses_email_address,
            'spouses_landline_number' => $this->spouses_landline_number,
            'spouses_mobile_number' => $this->spouses_mobile_number,
        ]);
    }

    public function render()
    {
        return view('livewire.application');
    }
}
