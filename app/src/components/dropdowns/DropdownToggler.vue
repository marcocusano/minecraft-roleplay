<script lang="ts">
export default {
    props: {
        target: {
            type: String,
            required: true
        },
        hiddenText: {
            type: String,
            required: false,
            default: null
        }
    },
}
</script>

<template>
    <button type="button" :data-dropdown-toggle="target" class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
        <span v-if="hiddenText" class="sr-only">{{ hiddenText }}</span>
        <slot></slot>
    </button>
</template>