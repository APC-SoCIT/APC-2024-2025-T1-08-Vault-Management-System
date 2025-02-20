<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Vault;
use Livewire\Component;

class AdminVaults extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search = ''; // Search box
    public $locationFilter = ''; // Location filter
    public $editingId = null; // ID of the vault being edited
    public $editingVault = []; // Temporary storage for vault data

    protected $queryString = ['search', 'locationFilter']; // Keeps filters on page reload

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingLocationFilter()
    {
        $this->resetPage();
    }

    public function edit($id)
    {
        $this->editingId = $id;
        $this->editingVault = Vault::find($id)->toArray(); // Store existing values
    }

    public function save()
    {
        if ($this->editingId) {
            $vault = Vault::find($this->editingId);
            $vault->update($this->editingVault); // Save changes
        }

        $this->editingId = null; // Reset after saving
    }

    public function render()
    {
        $query = Vault::query(); // Start query

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('vault_number', 'like', "%{$this->search}%")
                  ->orWhere('location', 'like', "%{$this->search}%")
                  ->orWhere('availability', 'like', "%{$this->search}%")
                  ->orWhere('price', 'like', "%{$this->search}%")
                  ->orWhere('owner', 'like', "%{$this->search}%")
                  ->orWhere('vault_owner_id', 'like', "%{$this->search}%")
                  ->orWhere('date_issued', 'like', "%{$this->search}%")
                  ->orWhere('urns_quantity', 'like', "%{$this->search}%");
            });
        }

        if ($this->locationFilter) {
            $query->where('location', $this->locationFilter);
        }

        $vaults = $query->paginate(10);

        return view('livewire.admin-vaults', compact('vaults'));
    }
}
