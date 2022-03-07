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
                'route' => route('blogs.index'),
                'active' => request()->routeIs('blogs.index')
            ],
            
            [
                'name' => 'Blog',
                'route' => route('blogs.index'),
                'active' => request()->routeIs('blogs.index')
            ],
            [
                'name' => 'Contacto',
                'route' => route('home'),
                'active' => request()->routeIs('#')
            ],
            [
                'name' => 'Buzón',
                'route' => route('home'),
                'active' => request()->routeIs('#')
            ],
        ];

        return view('livewire.navigation', compact('nav_links'));
    }
}
