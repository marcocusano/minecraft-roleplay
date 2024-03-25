<script lang="ts">

export default {
    props: {
        color: {
            type: String,
            required: false,
            default: null
        }
    }
}

</script>

<template>
    
    <span v-if="color === 'gray'" class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-1 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300"><slot></slot></span>
    <span v-else-if="color === 'red' || color === 'danger' || color === 'error'" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-1 py-0.5 rounded dark:bg-red-900 dark:text-red-300"><slot></slot></span>
    <span v-else-if="color === 'green' || color === 'sucess' || color === 'ok'" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-1 py-0.5 rounded dark:bg-green-900 dark:text-green-300"><slot></slot></span>
    <span v-else-if="color === 'yellow' || color === 'warning' || color === 'alert'" class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-1 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300"><slot></slot></span>
    <span v-else-if="color === 'indigo'" class="bg-indigo-100 text-indigo-800 text-xs font-medium me-2 px-1 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300"><slot></slot></span>
    <span v-else-if="color === 'purple'" class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-1 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300"><slot></slot></span>
    <span v-else-if="color === 'pink'" class="bg-pink-100 text-pink-800 text-xs font-medium me-2 px-1 py-0.5 rounded dark:bg-pink-900 dark:text-pink-300"><slot></slot></span>
    <span v-else class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-1 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300"><slot></slot></span>
</template>