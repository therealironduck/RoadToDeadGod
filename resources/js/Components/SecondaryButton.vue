<script setup lang="ts">
withDefaults(
    defineProps<{
        type?: 'button' | 'submit' | 'reset';
    }>(),
    {
        type: 'button',
    }
);
</script>

<template>
    <button
        :type="type"
        class="inline-flex items-center px-4 py-2 bg-zinc-800 border border-zinc-500 rounded-md font-semibold text-xs text-zinc-300 uppercase tracking-widest shadow-sm hover:bg-zinc-700 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 focus:ring-offset-zinc-800 disabled:opacity-25 transition ease-in-out duration-150"
    >
        <slot />
    </button>
</template>
