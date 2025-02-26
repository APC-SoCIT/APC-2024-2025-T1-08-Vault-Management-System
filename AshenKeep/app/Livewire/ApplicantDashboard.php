<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Apply;
use Illuminate\Support\Facades\Auth;

class ApplicantDashboard extends Component
{
    public $applicationStatus;

    public function mount()
    {
        // Get the latest application for the logged-in user
        $application = Apply::where('user_id', Auth::id())->latest()->first();
        $this->applicationStatus = $application ? $application->status : 'No Application Submitted';
    }

    public function render()
    {
        return view('livewire.applicant-dashboard', [
            'applicationStatus' => $this->applicationStatus
        ]);
    }
}
