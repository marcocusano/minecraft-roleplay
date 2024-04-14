<script lang="ts">
// Export
import { defineComponent } from 'vue';
export default defineComponent({
    props: {
        alignItems: {
            type: String,
            required: false,
            default: 'items-center'
        }
    },
});
</script>

<template>
    <div class="flex items-center" :class="`${alignItems}`">
        <slot></slot>
    </div>
</template>