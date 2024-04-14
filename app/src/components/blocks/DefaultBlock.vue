<script lang="ts">
// Types
export type Colors = 'red'|'danger'|'error'|'green'|'success'|'ok'|'yellow'|'alert'|'warning'|'gray'|'blue'
// Export
import { defineComponent } from 'vue';
export default defineComponent({
    props: {
        border: {
            type: Boolean,
            required: false,
            default: false
        },
        color: {
            type: String as () => Colors,
            required: false,
            default: 'blue'
        },
        label: {
            type: String,
            required: false,
            default: null
        },
        labelClass: {
            type: String,
            required: false,
            default: null
        },
        size: {
            type: String,
            required: false,
            default: null
        }
    },
    data() {
        return {
            className: this.getClass()
        }
    },
    methods: {
        getClass() {
            const color:Colors = this.color;
            switch (color) {
                case 'red':
                case 'danger':
                case 'error':
                    return ['text-red-800 bg-red-50 dark:bg-red-800/30 dark:text-red-400', this.border ? 'border border-red-200 dark:border-red-900' : '', this.size];
                case 'green':
                case 'success':
                case 'ok':
                    return ['text-green-800 bg-green-50 dark:bg-green-800/30 dark:text-green-400', this.border ? 'border border-green-200 dark:border-green-900' : '', this.size]
                case 'yellow':
                case 'warning':
                case 'alert':
                    return ['text-yellow-800 bg-yellow-50 dark:bg-yellow-800/30 dark:text-yellow-300', this.border ? 'border border-yellow-200 dark:border-yellow-900': '', this.size]
                case 'gray':
                    return ['text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-300', this.border ? 'border border-gray-200 dark:border-gray-900' : '', this.size]
                case 'blue':
                default:
                    return ['text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400', this.border ? 'border border-blue-200 dark:border-blue-900' : '', this.size]
            }
        },
        setClass() { this.className = this.getClass(); }
    },
});
</script>

<template>
    <div class="p-4 rounded-lg" :class="className" role="alert">
        <slot name="pre" ></slot>
        <span v-if="label" class="block w-full" :class="labelClass">{{ label }}</span>
        <slot></slot>
    </div>
</template>