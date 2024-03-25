<script lang="ts">

export default {

    props: {
        cols: {
            type: Number,
            required: false,
            default: 1
        },
        responsive: {
            type: Boolean,
            required: false,
            default: true
        }
    }

}

</script>

<template>
    <template v-if="responsive">
        <div v-if="cols === 2" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 mb-4">
            <slot></slot>
        </div>
        <div v-else-if="cols === 3" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
            <slot></slot>
        </div>
        <div v-else-if="cols === 4" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
            <slot></slot>
        </div>
        <div v-else class="grid grid-cols-1 gap-4 mb-4">
            <slot></slot>
        </div>
    </template>
    <template v-else>
        <div v-if="cols === 2" class="grid grid-cols-2 gap-4 mb-4">
            <slot></slot>
        </div>
        <div v-else-if="cols === 3" class="grid grid-cols-3 gap-4 mb-4">
            <slot></slot>
        </div>
        <div v-else-if="cols === 4" class="grid grid-cols-4 gap-4 mb-4">
            <slot></slot>
        </div>
        <div v-else class="grid grid-cols-1 gap-4 mb-4">
            <slot></slot>
        </div>
    </template>
</template>