<script lang="ts">
// Export
import { defineComponent } from 'vue';
export default defineComponent({

    props: {
        top: {
            type: String,
            required: false,
            default: null
        },
        left: {
            type: String,
            required: false,
            default: null
        },
        right: {
            type: String,
            required: false,
            default: null
        },
        bottom: {
            type: String,
            required: false,
            default: null
        }
    }

});

</script>

<template>
    <div class="absolute" :class="`${top} ${left} ${right} ${bottom}`">
        <slot></slot>
    </div>
</template>