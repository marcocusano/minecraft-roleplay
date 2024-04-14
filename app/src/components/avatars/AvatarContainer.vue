<script lang="ts">
// Export
import { defineComponent } from 'vue';
export default defineComponent({
    props: {
        rounded: {
            type: Boolean,
            required: false,
            default: false
        },
        size: {
            type: String,
            required: false,
            default: 'w-36 h-36'
        },
    },
});
</script>

<template>
    <div
        class="relative top-[-50px] shadow-lg grid place-items-center border bg-gray-100 border-gray-200 dark:bg-gray-700 dark:border-gray-900"
        :class="`${size} ${rounded ? 'rounded-full' : 'rounded-lg'}`"
    >
        <slot></slot>
    </div>
</template>