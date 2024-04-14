<script lang="ts">
// Export
import { defineComponent } from 'vue';
export default defineComponent({
    props: {
        lines: {
            type: Number,
            required: false,
        }
    }
});
</script>

<template>
    <div role="status" class="space-y-2.5 animate-pulse max-w-lg">
        <div class="flex items-center w-full">
            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-32"></div>
            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
        </div>
        <div v-if="lines > 1" class="flex items-center w-full max-w-[480px]">
            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
        </div>
        <div v-if="lines > 2" class="flex items-center w-full max-w-[400px]">
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
            <div class="h-2.5 ms-2 bg-gray-200 rounded-full dark:bg-gray-700 w-80"></div>
            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
        </div>
        <div v-if="lines > 3" class="flex items-center w-full max-w-[480px]">
            <div class="h-2.5 ms-2 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
        </div>
        <div v-if="lines > 4" class="flex items-center w-full max-w-[440px]">
            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-32"></div>
            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
            <div class="h-2.5 ms-2 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
        </div>
        <div v-if="lines > 5" class="flex items-center w-full max-w-[360px]">
            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
            <div class="h-2.5 ms-2 bg-gray-200 rounded-full dark:bg-gray-700 w-80"></div>
            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
        </div>
        <span class="sr-only">Loading...</span>
    </div>
</template>