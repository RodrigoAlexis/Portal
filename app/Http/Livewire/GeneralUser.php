<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Buzon;

class GeneralUser extends Component
{
    public function render()
    {
        $buzon = Buzon::where('user_id', auth()->user()->id)->paginate('3');

        return view('livewire.general-user', compact('buzon'));
    }
}
