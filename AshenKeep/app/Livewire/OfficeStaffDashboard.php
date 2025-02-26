<?php 

namespace App\Livewire;

use Livewire\Component;
use App\Models\Apply;

class OfficeStaffDashboard extends Component
{
    public $expandedApplicationId = null;

    protected $listeners = ['refreshComponent' => 'render'];

    public function toggleForms($id)
    {
        $this->expandedApplicationId = ($this->expandedApplicationId === $id) ? null : $id;
        $this->dispatch('refreshComponent'); // Refresh UI
    }

    public function updateStatus($id, $status)
    {
        Apply::where('id', $id)->update(['status' => $status]);

        $this->expandedApplicationId = null; // Collapse expanded section if status is updated
        $this->dispatch('refreshComponent'); // Refresh UI
    }

    public function updateAllStatus($status)
    {
        Apply::where('status', 'pending')->update(['status' => $status]);
        $this->dispatch('refreshComponent'); // Refresh UI
    }

    public function render()
    {
        return view('livewire.office-staff-dashboard', [
            'applications' => Apply::with(['secondApply', 'thirdApply', 'fourthApply', 'beneficiary'])
                                   ->whereNotIn('status', ['Rejected', 'Approved']) // Exclude rejected and approved
                                   ->get(),
        ]);
    }
}
