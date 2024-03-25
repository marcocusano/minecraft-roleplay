<script lang="ts">

import { RouterLink } from 'vue-router';

export default {

    props: {
        href: {
            type: String,
            required: false,
            default: null
        },
        to: {
            type: String,
            required: false,
            default: null
        }
    },

    components: {
        RouterLink
    },

    emits: ['click']

}

</script>

<template>
    <a v-if="href" :href="href" class="font-medium text-blue-600 hover:underline dark:text-blue-500" @click="$emit('click', $event)"><slot></slot></a>
    <RouterLink v-else-if="to" :to="to" @click="$emit('click', $event)"><slot></slot></RouterLink>
    <template v-else><div><slot></slot></div></template>
</template>