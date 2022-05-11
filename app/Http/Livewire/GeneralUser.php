<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Buzon;
use App\Models\User;
use App\Models\Blog;
use App\Models\Group;


class GeneralUser extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $buzon = Buzon::where('user_id', auth()->user()->id)->paginate('3');

        $user = User::count();

        $client = User::where('isClient', 'Soy cliente o proveedor')->count();

        $NoClient = User::where('isClient', 'No soy cliente o proveedor')->count();

        $google = User::where('type_socialite', 'google')->count();

        $facebook = User::where('type_socialite', 'facebook')->count();

        $blog = Blog::count();

        $ultimoBlog = Blog::where('status', 2)->latest('id')->take(1)->get();

        $grupo = Group::count();

        $ultimoGrupo = Group::orWhere('id', 'LIKE', '%' . $this->search . '%')->latest('id')->take(1)->get();

        return view('livewire.general-user', compact('buzon', 'user', 'client', 'NoClient', 'blog', 'ultimoBlog', 'grupo', 'ultimoGrupo'));
    }
}
