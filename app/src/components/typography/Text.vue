<script lang="ts">

export default {

    props: {
        size: {
            type: String,
            required: false,
            default: null
        }
    }

}

</script>

<template>
    <p v-if="size === 'xs'" class="text-xs text-gray-900 dark:text-white"><slot></slot></p>
    <p v-else-if="size === 'sm'" class="text-sm text-gray-900 dark:text-white"><slot></slot></p>
    <p v-else-if="size === 'lg'" class="text-lg text-gray-900 dark:text-white"><slot></slot></p>
    <p v-else-if="size === 'xl'" class="text-xl text-gray-900 dark:text-white"><slot></slot></p>
    <p v-else-if="size === '2xl'" class="text-2xl text-gray-900 dark:text-white"><slot></slot></p>
    <p v-else-if="size === '3xl'" class="text-3xl text-gray-900 dark:text-white"><slot></slot></p>
    <p v-else-if="size === '4xl'" class="text-4xl text-gray-900 dark:text-white"><slot></slot></p>
    <p v-else-if="size === '5xl'" class="text-5xl text-gray-900 dark:text-white"><slot></slot></p>
    <p v-else-if="size === '6xl'" class="text-6xl text-gray-900 dark:text-white"><slot></slot></p>
    <p v-else-if="size === '7xl'" class="text-gray-900 text-7xl dark:text-white"><slot></slot></p>
    <p v-else-if="size === '8xl'" class="text-gray-900 text-8xl dark:text-white"><slot></slot></p>
    <p v-else-if="size === '9xl'" class="text-gray-900 text-9xl dark:text-white"><slot></slot></p>
    <p v-else class="text-base text-gray-900 dark:text-white"><slot></slot></p>
</template>