<script lang="ts">

// Components
import DefaultButton from '@/components/buttons/DefaultButton.vue';

export default {
    props: {
        color: {
            type: String,
            required: false,
            default: null
        },
        enabled: {
            type: Boolean,
            required: false,
            default: true
        }
    },
    components: {
        DefaultButton
    },
    emits: ['click']
}

</script>

<template>
    <DefaultButton type="submit" :color="color" @click="$emit('click')" :enabled="enabled"><slot></slot></DefaultButton>
</template>