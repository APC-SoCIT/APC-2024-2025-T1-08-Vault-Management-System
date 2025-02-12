<?php

namespace App\Livewire;

use App\Models\Apply;
use Livewire\Component;

class OfficeStaffDashboard extends Component
{
    public $applications;

    // Mount method will load the applications when the component is first initialized
    public function mount()
    {
        $this->applications = Apply::latest()->get(); // Fetch the latest applications
    }

    // Method to refresh the applications
    public function refreshApplications()
    {
        $this->applications = Apply::latest()->get(); // Fetch updated applications
    }

    // Render method will return the view with the latest applications
    public function render()
    {
        return view('livewire.office-staff-dashboard');
    }
}
