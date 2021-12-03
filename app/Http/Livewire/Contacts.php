<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class Contacts extends Component
{
    use withPagination;

    public string $searchCriterion;
    public string $searchTerm;
    public string $sortCriterion;
    public string $sortOrder;

    public function mount()  // hook
    {
        $this->searchTerm = '';
        $this->searchCriterion = 'name';
        $this->sortCriterion = 'name';
        $this->sortOrder = 'asc'; // faire 4  variables pour faire différents ordres de tri

    }

    public function orderBy($sortCriterion, $sortOrder)
    {
        $this->sortCriterion = $sortCriterion;
        $this->sortOrder = $sortOrder === 'desc' ? 'asc' : 'desc';

    }

    public function updatedSearchTerm() // quand c'est mis à jour
    {
        $this->resetPage();
    }

    public function getContactsProperty() // utilise $this-> dans la vue pour accéder à $contacts
    {
        return Contact::where($this->searchCriterion, 'like', '%' . $this->searchTerm . '%')
            ->orderBy($this->sortCriterion, $this->sortOrder)
            ->paginate(20);
    }

    public function render()
    {
        return view('livewire.contacts');
    }
}
