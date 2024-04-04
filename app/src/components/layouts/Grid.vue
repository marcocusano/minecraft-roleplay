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
        },
        class: {
            type: String,
            required: false,
            default: null
        }
    }

}

</script>

<template>
    <template v-if="responsive">
        <div v-if="cols === 2" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 place-items-center" :class="class">
            <slot></slot>
        </div>
        <div v-else-if="cols === 3" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 place-items-center" :class="class">
            <slot></slot>
        </div>
        <div v-else-if="cols === 4" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 place-items-center" :class="class">
            <slot></slot>
        </div>
        <div v-else class="grid grid-cols-1 gap-4 place-items-center">
            <slot></slot>
        </div>
    </template>
    <template v-else>
        <div v-if="cols === 2" class="grid grid-cols-2 gap-4 place-items-center" :class="class">
            <slot></slot>
        </div>
        <div v-else-if="cols === 3" class="grid grid-cols-3 gap-4 place-items-center" :class="class">
            <slot></slot>
        </div>
        <div v-else-if="cols === 4" class="grid grid-cols-4 gap-4 place-items-center" :class="class">
            <slot></slot>
        </div>
        <div v-else class="grid grid-cols-1 gap-4 place-items-center" :class="class">
            <slot></slot>
        </div>
    </template>
</template>