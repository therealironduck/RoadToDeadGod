<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-zinc-200 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-zinc-100">You're logged in!</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
