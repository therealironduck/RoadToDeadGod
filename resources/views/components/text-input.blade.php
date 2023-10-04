@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-zinc-700 bg-zinc-900 text-zinc-300 focus:border-amber-600 focus:ring-amber-600 rounded-md shadow-sm']) !!}>
