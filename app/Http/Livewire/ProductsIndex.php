<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Group;
use App\Models\Line;
use Livewire\WithPagination;

class ProductsIndex extends Component
{

    use WithPagination;
    
    public $search;

    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        $products = Product::orWhere('name', 'LIKE', '%' . $this->search . '%')->latest('id')->paginate(10);

        return view('livewire.products-index', compact('products'));
    }

}
