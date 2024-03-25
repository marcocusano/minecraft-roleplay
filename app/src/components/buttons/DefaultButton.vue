<script lang="ts">

export default {

    props: {
        color: {
            type: String,
            required: false,
            default: 'default'
        },
        enabled: {
            type: Boolean,
            required: false,
            default: true
        },
        type: {
            type: String,
            required: false,
            default: 'button'
        },
    },

    data() {
        return {
            buttonType: this.initButtonType()
        }
    },

    methods: {

        initButtonType():'button'|'reset'|'submit' {
            switch (this.type) {
                case 'submit':
                case 'reset':
                    return this.type;
                default:
                    return 'button'
            }
        }

    },

    emits: ['click'],

    watch: {
        type(v) { this.initButtonType(); }
    }

}


</script>

<template>

    <button v-if="color === 'alternative'" @click="$emit('click', $event)" :type="buttonType" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" :disabled="!enabled"><slot></slot></button>
    <button v-else-if="color === 'gray'" @click="$emit('click', $event)" :type="buttonType" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" :disabled="!enabled"><slot></slot></button>
    <button v-else-if="color === 'light'" @click="$emit('click', $event)" :type="buttonType" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" :disabled="!enabled"><slot></slot></button>
    <button v-else-if="color === 'green' || color === 'success'" @click="$emit('click', $event)" :type="buttonType" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" :disabled="!enabled"><slot></slot></button>
    <button v-else-if="color === 'red' || color === 'danger' || color === 'error'" @click="$emit('click', $event)" :type="buttonType" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" :disabled="!enabled"><slot></slot></button>
    <button v-else-if="color === 'yellow' || color === 'warning' || color === 'alert'" @click="$emit('click', $event)" :type="buttonType" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900" :disabled="!enabled"><slot></slot></button>
    <button v-else-if="color === 'purple'" @click="$emit('click', $event)" :type="buttonType" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" :disabled="!enabled"><slot></slot></button>
    <button v-else @click="$emit('click', $event)" :type="buttonType" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" :disabled="!enabled"><slot></slot></button>

</template>

<style>
    button i {
        margin-right: 5px;
    }
</style>