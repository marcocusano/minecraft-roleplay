<script lang="ts">
export default {
    props: {
        color: {
            type: String,
            required: false,
            default: 'blue'
        },
    },
    data() {
        return {
            c: this.setClass()
        }
    },
    methods: {
        getClass(color:string, content:'container'|'pointer') {
            switch (color) {
                case 'green':
                case 'success':
                case 'ok':
                    return content === 'container' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300' : 'bg-green-500';
                case 'red':
                case 'danger':
                case 'error':
                    return content === 'container' ? 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300' : 'bg-red-500';
                case 'yellow':
                case 'alert':
                case 'warning':
                    return content === 'container' ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300' : 'bg-yellow-500';
                case 'gray':
                    return content === 'container' ? 'bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-300' : 'bg-gray-500';
                case 'blue':
                case 'default':
                    return content === 'container' ? 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300' : 'bg-blue-500';
            }
        },
        setClass() {
            return {
                container: this.getClass(this.color, 'container'),
                pointer: this.getClass(this.color, 'pointer')
            };
        },
    },
    watch: {
        color(v) { this.c = this.setClass(); }
    }
}
</script>
<template>
    <span class="inline-flex items-center  text-xs font-medium px-2.5 py-0.5 rounded-full " :class="c.container">
        <span class="w-2 h-2 me-1 rounded-full" :class="c.pointer"></span>
        <span class="ml-1 mb-1"><slot></slot></span>
    </span>
</template>
