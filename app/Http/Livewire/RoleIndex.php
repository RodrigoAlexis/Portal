<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Livewire\WithPagination;

class RoleIndex extends Component
{

    use WithPagination;
    
    public $search;
    

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $roles = Role::orWhere('name', 'LIKE', '%' . $this->search . '%')->latest('id')->paginate(6);

        return view('livewire.role-index', compact('roles'));
    }
}
