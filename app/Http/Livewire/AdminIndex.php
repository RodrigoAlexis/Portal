<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminIndex extends Component
{
    use WithPagination;
    
    public $search;
    

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        $usuarios = User::orWhere('name', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('paterno', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('materno', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                        // ->orWhere('departamento', 'LIKE', '%' . $this->search . '%')
                        ->latest('id')->paginate(8);

        return view('livewire.admin-index', compact('usuarios'));
    }
}
