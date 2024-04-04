<script lang="ts">

// Components
import Flex from '@/components/layouts/Flex.vue'

// Export
export default {
    props: {
        color: {
            type: String,
            required: false,
            default: 'bg-yellow-300'
        },
        justifyCenter: {
            type: Boolean,
            required: false,
            default: false
        },
        label: {
            type: String,
            required: true
        },
        value: {
            type: [String, Number],
            required: true
        },
        percentage: {
            type: Number,
            required: true
        }
    },
    components: {
        Flex,
    },
    methods: {
        onClick() { this.$emit('click', this); }
    },
    emits: ['click']
}
</script>


<template>
    <Flex :class="`${justifyCenter ? 'justify-center' : ''}`">
        <a href="javascript:void(0)" @click="onClick" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ label }}</a>
        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
            <div class="h-5 rounded" :class="`${color}`" :style="`width: ${percentage}%`"></div>
        </div>
        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ parseInt(percentage.toString()).toString() }}%</span>
    </Flex>
</template>