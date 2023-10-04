<a {{$attributes->class('underline text-sm text-zinc-400 hover:text-zinc-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 focus:ring-offset-zinc-800')}}
   wire:navigate
>
    {{$slot}}
</a>
