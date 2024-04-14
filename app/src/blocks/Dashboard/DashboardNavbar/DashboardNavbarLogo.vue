<script lang="ts">
// Data
import Application from '@/data/modules/Application';
// Export
import { defineComponent } from 'vue';
export default defineComponent({

    data() {
        return {
            app: Application
        }
    },

});

</script>

<template>
    <a href="/" class="flex items-center justify-between mr-4">
        <img src="/images/logo.png" class="mr-3 h-8" :alt="app.name" :title="app.name" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white" :title="app.name">{{ app.shortName }}</span>
    </a>
</template>