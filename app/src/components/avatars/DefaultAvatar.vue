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
        src: {
            type: String,
            required: true
        },
    }
});
</script>

<template>
    <img :src="src" :class="`${size} ${rounded ? 'rounded-full' : 'rounded'}`">
</template>