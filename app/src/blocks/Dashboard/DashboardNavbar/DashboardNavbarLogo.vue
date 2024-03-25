<script lang="ts">

export default {

    data() {
        return {
            app: {
                name: import.meta.env['VITE_APP_NAME'],
                short_name: import.meta.env['VITE_APP_SHORT_NAME']
            }
        }
    },

}

</script>

<template>
    <a href="/" class="flex items-center justify-between mr-4">
        <img src="/images/logo.png" class="mr-3 h-8" :alt="app.name" :title="app.name" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white" :title="app.name">{{ app.short_name }}</span>
    </a>
</template>