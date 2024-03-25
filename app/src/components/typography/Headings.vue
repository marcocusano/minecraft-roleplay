<script lang="ts">

export default {

    props: {
        type: {
            type: Number,
            required: false,
            default: 1
        },
        primary: {
            type: String,
            required: false,
            default: null
        },
        secondary: {
            type: String,
            required: false,
            default: null
        }
    }

}

</script>

<template>
    <h1 v-if="type === 1" class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        <template v-if="primary">{{ primary }}</template> {{ primary }}
        <template v-if="secondary"><small class="ms-2 font-semibold text-gray-500 dark:text-gray-400">{{ secondary }}</small></template>

        <slot></slot>
    </h1>
</template>