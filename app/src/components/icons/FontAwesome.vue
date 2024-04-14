<script lang="ts">
// Styling
import '@/assets/vendors/fontawesome/css/all.min.css'
// Export
import { defineComponent } from 'vue';
export default defineComponent({

    props: {
        icon: {
            type: String,
            required: true,
        },
        type: {
            type: String,
            required: false,
            default: 'fas'
        }
    }

});

</script>

<template>
    <i :class="type + ' fa-' + icon"></i>
</template>