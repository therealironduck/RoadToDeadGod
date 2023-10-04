<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-zinc-200 border border-transparent rounded-md font-semibold text-xs text-zinc-800 uppercase tracking-widest hover:bg-white focus:bg-white active:bg-zinc-300 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 focus:ring-offset-zinc-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
