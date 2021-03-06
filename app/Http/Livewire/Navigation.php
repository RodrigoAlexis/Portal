<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $nav_links = [
            [
                'name' => 'Inicio',
                'route' => route('home'),
                'active' => request()->routeIs('home')
            ],
            [
                'name' => 'Nosotros',
                'route' => route('nosotros'),
                'active' => request()->routeIs('nosotros')
            ],
            [
                'name' => 'Productos',
                'route' => route('grupos.index'),
                'active' => request()->routeIs('grupos.index')
            ],
            
            [
                'name' => 'Blog',
                'route' => route('blogs.index'),
                'active' => request()->routeIs('blogs.index')
            ],
            [
                
                'name' => 'Buzón',
                'route' => route('buzon.index'),
                'active' => request()->routeIs('buzon.index')
            ],
            [
                'name' => 'Contacto',
                'route' => route('contacto.index'),
                'active' => request()->routeIs('contacto.index')
            ],
        ];

        return view('livewire.navigation', compact('nav_links'));
    }
}
