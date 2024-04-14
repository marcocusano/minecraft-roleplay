<script lang="ts">
// Types
export type Colors = 'gray'|'red'|'green'|'yellow'|'indigo'|'purple'|'pink'|'blue';
// Export
import { defineComponent } from 'vue';
export default defineComponent({
    props: {
        color: {
            type: String as () => Colors,
            required: false,
            default: null
        }
    },
    methods: {
        getColor(color:Colors):string {
            switch (color) {
                case 'gray':
                    return 'bg-gray-100 bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300'
                case 'red':
                    return 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300'
                case 'green':
                    return 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300'
                case 'yellow':
                    return 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300'
                case 'indigo':
                    return 'bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-300'
                case 'pink':
                    return 'bg-pink-100 text-pink-800 dark:bg-pink-900 dark:text-pink-300'
                case 'purple':
                    return 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300'
                case 'blue':
                default:
                    return 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300'
            }
        }
    }
});

</script>

<template>
    <span class="text-xs font-medium me-2 px-1 py-0.5 rounded" :class="getColor(color)"><slot></slot></span>
</template>