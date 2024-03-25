<script lang="ts">

export default {
    props: {
        id: {
            type: String,
            required: false,
            default: 'custom-tooltip'
        },
        label: {
            type: String,
            required: true
        }
    }
}

</script>

<template>
    <div :id="id" role="tooltip"
        class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
        {{ label }}
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
</template>