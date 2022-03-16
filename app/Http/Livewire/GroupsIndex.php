<?php

namespace App\Http\Livewire;

use App\Models\Group;
use Livewire\Component;
use Livewire\WithPagination;

class GroupsIndex extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $groups = Group::orWhere('name', 'LIKE', '%' . $this->search . '%')->latest('id')->paginate(5);;

        return view('livewire.groups-index', compact('groups'));
    }
}
