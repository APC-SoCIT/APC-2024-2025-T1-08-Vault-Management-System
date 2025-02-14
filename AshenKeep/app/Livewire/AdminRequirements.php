<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Requirement;
use Livewire\Component;

class AdminRequirements extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind'; // Ensure Tailwind pagination is applied

    public function issueProof($requirementId) 
    {
        $requirement = Requirement::find($requirementId);

        if ($requirement) {
            $requirement->update(['status' => 'proof_issued']);
    
            // Refresh the component to remove the updated record from the list
            $this->resetPage();
        }

    }

    public function render()
    {
        // Fetch only "approved" requirements
        $groupedRequirements = Requirement::where('status', 'approved')->paginate(10);

        return view('livewire.admin-requirements', [
            'groupedRequirements' => $groupedRequirements,
        ]);
    }
}