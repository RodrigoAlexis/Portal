<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Buzon;
use App\Models\User;


class GeneralUser extends Component
{
    public function render()
    {
        $buzon = Buzon::where('user_id', auth()->user()->id)->paginate('3');

        $user = User::count();

        $google = User::where('type_socialite', 'google')->count();
        
        $facebook = User::where('type_socialite', 'facebook')->count();

        return view('livewire.general-user', compact('buzon', 'user'));
    }
}
