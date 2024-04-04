<script lang="ts">
export default {
    props: {
        size: {
            type: String,
            required: false,
            default: null
        }
    },
    computed: {
        getClass() {
            const sizeClasses = {
                base:'text-base',
                xs: 'text-xs',
                sm: 'text-sm',
                lg: 'text-lg',
                xl: 'text-xl',
                '2xl': 'text-2xl',
                '3xl': 'text-3xl',
                '4xl': 'text-4xl',
                '5xl': 'text-5xl',
                '6xl': 'text-6xl',
                '7xl': 'text-7xl',
                '8xl': 'text-8xl',
                '9xl': 'text-9xl'
            };
            // Se la dimensione esiste nell'oggetto delle classi, restituisci quella classe, altrimenti restituisci la classe di default 'text-base'
            return sizeClasses[this.size] || 'text-base';
        }
    }
}
</script>

<template>
    <p :class="getClass" class="text-gray-900 dark:text-white">
        <slot></slot>
    </p>
</template>