<?php 

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Requirement;

class OfficestaffRequirements extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function updateStatus($requirementId, $status)
    {
        $requirement = Requirement::find($requirementId);

        if ($requirement) {
            $requirement->update(['status' => $status]);

            // Refresh the component after updating the status
            $this->resetPage(); // Reset pagination to avoid empty pages
        }
    }

    public function render()
    {
        // Fetch only 'pending' requirements
        $groupedRequirements = Requirement::where('status', 'pending')->paginate(10);

        return view('livewire.officestaff-requirements', [
            'groupedRequirements' => $groupedRequirements,
        ]);
    }
}
