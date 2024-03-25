<script lang="ts">

export default {
    props: {
        action: {
            type: String,
            required: false,
            default: '#'
        },
        method: {
            type: String,
            required: false,
            default: null
        },
    },
    emits: ['submit']
}

</script>

<template>
    <form class="space-y-4 md:space-y-6" :method="method" :action="action" @submit.prevent="$emit('submit')">
        <slot></slot>
    </form>
</template>