<script lang="ts">
// Export
import { defineComponent } from 'vue';
export default defineComponent({

    props: {
        clickable: {
            type: Boolean,
            required: false,
            default: false
        },
        description: {
            type: String,
            required: false,
            default: null
        },
        title: {
            type: String,
            required: false,
            default: null
        }
    }

});

</script>

<template>

    <div class="block w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 " :class="clickable ?? 'hover:bg-gray-100 dark:hover:bg-gray-700'">
        <slot name="pre"></slot>
        <h5 v-if="title" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ title }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ description }}</p>
        <slot></slot>
    </div>
</template>