<script setup lang="ts">
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import {Link} from '@inertiajs/vue3';
</script>

<template>
    <div class="bg-cover" style="background-image: url(/bg.jpg);">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-zinc-950/75">
            <div
                class="w-full sm:max-w-md px-6 pt-6 pb-4 bg-zinc-800/60 shadow-md overflow-hidden sm:rounded-lg"
            >
                <div class="grid place-items-center">
                    <Link href="/">
                        <ApplicationLogo class="w-16 mb-2 fill-current text-zinc-500"/>
                    </Link>
                </div>

                <div class="mt-6">
                    <slot/>
                </div>
            </div>
        </div>
    </div>
</template>
