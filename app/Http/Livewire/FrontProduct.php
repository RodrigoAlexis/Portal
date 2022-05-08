<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class FrontProduct extends Component
{
    public $showModal = 'hidden';

    protected $listeners = [
        'showModal'
    ];

    public function render()
    {
        return view('livewire.front-product');
    }

    public function showModal(Product $product)
    {
        dd($product);
    }
}
