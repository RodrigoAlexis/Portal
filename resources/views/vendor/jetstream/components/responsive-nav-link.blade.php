@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-500 text-white block px-3 py-2 rounded-md text-sm font-semibold'
            : 'text-gray-600 hover:bg-blue-500 hover:text-white block px-3 py-2 rounded-md text-sm font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
