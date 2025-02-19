<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Vault;
use Livewire\Component;

class ApplicantVaults extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind'; //using tailwind design for pagination

    public $search = ''; // For the search box
    public $locationFilter = ''; // For the location dropdown

    protected $queryString = ['search', 'locationFilter']; // Keep search and location filters when page reloads

    public function updatingSearch() 
    {
        $this->resetPage();
    }

    public function updatingLocationFilter()
    {
        $this->resetPage();
    }

    public function render()//shows list of vaults
    {
        $query = Vault::query(); //start the database search

        if ($this->search) { //filter by search text if it is entered
            $query->where(function ($q) {
                $q->where('vault_number', 'like', "%{$this->search}%")
                  ->orWhere('location', 'like', "%{$this->search}%")
                  ->orWhere('availability', 'like', "%{$this->search}%")
                  ->orWhere('price', 'like', "%{$this->search}%");
            });
        }

        if ($this->locationFilter) { //filter by location if it is selected
            $query->where('location', $this->locationFilter);
        }

        $vaults = $query->paginate(10); //shows 10 vaults per page

        return view('livewire.applicant-vaults', compact('vaults')); //show the page with the vaults
    }
}
