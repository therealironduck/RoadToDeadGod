@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-amber-600 text-left text-base font-medium text-amber-300 bg-amber-900/50 focus:outline-none focus:text-amber-200 focus:bg-amber-900 focus:border-amber-300 transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-zinc-400 hover:text-zinc-200 hover:bg-zinc-700 hover:border-zinc-600 focus:outline-none focus:text-zinc-200 focus:bg-zinc-700 focus:border-zinc-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
