<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Buzon;
use App\Models\User;
use App\Models\Blog;
use App\Models\Group;
use App\Models\Line;
use App\Models\Product;
use Spatie\Permission\Models\Role;


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
        // Historico de buzon
        $buzon = Buzon::where('user_id', auth()->user()->id)->paginate('3');

        // Informativo
        $user = User::count();

        $client = User::where('isClient', 'Soy cliente o proveedor')->count();

        $NoClient = User::where('isClient', 'No soy cliente o proveedor')->count();

        $google = User::where('type_socialite', 'google')->count();

        $facebook = User::where('type_socialite', 'facebook')->count();

        $blog = Blog::count();

        $ultimoBlog = Blog::where('status', 2)->latest('id')->take(1)->get();

        $grupo = Group::count();

        $ultimoGrupo = Group::orWhere('id', 'LIKE', '%' . $this->search . '%')->latest('id')->take(1)->get();

        $linea = Line::count();

        $ultimaLinea = Line::orWhere('id', 'LIKE', '%' . $this->search . '%')->latest('id')->take(1)->get();

        $articulo = Product::count();

        $ultimoArticulo = Product::orWhere('id', 'LIKE', '%' . $this->search . '%')->latest('id')->take(1)->get();

        $articulo = Product::count();

        $ultimoArticulo = Product::orWhere('id', 'LIKE', '%' . $this->search . '%')->latest('id')->take(1)->get();

        $buzon1 = Buzon::count();

        $ultimoBuzon = Buzon::orWhere('id', 'LIKE', '%' . $this->search . '%')->latest('id')->take(1)->get();

        $rol = Role::count();

        $roles = Role::orWhere('id', 'LIKE', '%' . $this->search . '%')->latest('id')->get();

        return view('livewire.general-user', compact('buzon', 'user', 'client', 
                                                    'NoClient', 'blog', 'ultimoBlog', 
                                                    'grupo', 'ultimoGrupo', 'linea',
                                                    'ultimaLinea', 'articulo', 'ultimoArticulo',
                                                    'buzon1', 'ultimoBuzon', 'roles', 'rol'));
    }
}
