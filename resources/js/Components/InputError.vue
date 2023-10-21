<script setup lang="ts">
defineProps<{
    message?: string;
}>();
</script>

<template>
    <div v-show="message">
        <p class="text-sm text-red-400 space-y-1">
            {{ message }}
        </p>
    </div>
</template>
