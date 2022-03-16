<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Line;
use Livewire\WithPagination;

class LinesIndex extends Component
{
    use WithPagination;
    
    public $search;
    

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        $lines = Line::orWhere('name', 'LIKE', '%' . $this->search . '%')->latest('id')->paginate(6);

        return view('livewire.lines-index', compact('lines'));
    }
}
