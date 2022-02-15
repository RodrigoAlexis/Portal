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
                'route' => route('home'),
                'active' => request()->routeIs('login')
            ],
            [
                'name' => 'Productos',
                'route' => route('home'),
                'active' => request()->routeIs('register')
            ],
            
            [
                'name' => 'Blog',
                'route' => route('home'),
                'active' => request()->routeIs('#')
            ],
            [
                'name' => 'Contacto',
                'route' => route('home'),
                'active' => request()->routeIs('#')
            ],
        ];

        return view('livewire.navigation', compact('nav_links'));
    }
}
