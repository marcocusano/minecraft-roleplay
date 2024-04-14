<script lang="ts">

// Store
import ThemeStore from '@/stores/theme';

// Export
import { defineComponent } from 'vue';
export default defineComponent({

    data() {
        return {
            checked: !ThemeStore().theme.dark,
        }
    },

    methods: {

        init() { if (this.checked) { document.body.classList.remove('dark'); } else { document.body.classList.add('dark'); } },

        change(e:any) {
            ThemeStore().toggleDarkMode(!e.target.checked);
            this.init();
        },

    },

    mounted() { this.init(); },

});

</script>

<template>
    <label class="inline-flex items-center mx-2 cursor-pointer">
        <input ref="DarkModeToggler" type="checkbox" value="" class="sr-only peer" v-model="checked" :checked="checked" @change="change">
        <div class="relative w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-0 peer-focus:ring-yellow-300 dark:peer-focus:ring-yellow-800 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-yellow-400"></div>
        <slot></slot>
    </label>
</template>