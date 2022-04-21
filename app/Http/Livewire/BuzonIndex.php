<?php

namespace App\Http\Livewire;

use App\Models\Buzon;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class BuzonIndex extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $buzon = Buzon::orWhere('folio', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('canal', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('categoria', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('tipo', 'LIKE', '%' . $this->search . '%')
                        ->latest('id')->paginate(10);

        return view('livewire.buzon-index', compact('buzon'));
    }
}
