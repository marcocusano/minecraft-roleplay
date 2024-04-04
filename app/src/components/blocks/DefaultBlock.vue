<script lang="ts">
export default {
    props: {
        color: {
            type: String,
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
            default: 'text-sm'
        }
    }
}
</script>

<template>
    <div v-if="color === 'red' || color === 'danger' || color === 'error'" class="p-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-red-800/30 dark:text-red-400" :class="size" role="alert">
        <slot name="pre" ></slot>
        <span v-if="label" class="block w-full" :class="labelClass">{{ label }}</span>
        <slot></slot>
    </div>
    <div v-else-if="color === 'green' || color === 'success' || color === 'ok'" class="p-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-green-800/30 dark:text-green-400" :class="size" role="alert">
        <slot name="pre"></slot>
        <span v-if="label" class="block w-full" :class="labelClass">{{ label }}</span>
        <slot></slot>
    </div>
    <div v-else-if="color === 'yellow' || color === 'alert' || color === 'warning'" class="p-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-yellow-800/30 dark:text-yellow-300" :class="size" role="alert">
        <slot name="pre"></slot>
        <span v-if="label" class="block w-full" :class="labelClass">{{ label }}</span>
        <slot></slot>
    </div>
    <div v-else-if="color === 'gray'" class="p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300" :class="size" role="alert">
        <slot name="pre"></slot>
        <span v-if="label" class="block w-full" :class="labelClass">{{ label }}</span>
        <slot></slot>
    </div>
    <div v-else class="p-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" :class="size" role="alert">
        <slot name="pre"></slot>
        <span v-if="label" class="block w-full" :class="labelClass">{{ label }}</span>
        <slot></slot>
    </div>
</template>