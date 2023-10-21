<script setup lang="ts">
import {Link} from "@inertiajs/vue3";
import { Method, PageProps, Progress } from '@inertiajs/core';

interface Props {
    href: string;
    method?: Method;
    as?: string;
}

withDefaults(defineProps<Props>(), {
    method: 'get',
    as: 'a'
});
</script>

<template>
    <Link :href="href"
          :method="method"
          :as="as"
          class="underline text-sm text-zinc-400 hover:text-zinc-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 focus:ring-offset-zinc-800"
    >
        <slot/>
    </Link>
</template>
