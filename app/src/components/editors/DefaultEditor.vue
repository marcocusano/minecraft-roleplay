<script lang="ts">

// Components
import Quill from './Quill.vue'
import Markdown from './Markdown.vue'
import TinyMCE from './TinyMCE.vue'

/// Export
import { defineComponent } from 'vue';
export default defineComponent({
    props: {
        id: {
            type: String,
            required: false,
            default: 'editor',
        },
        modelValue: {
            type: String,
            required: false,
            default: null
        }
    },
    components: {
        Quill,
        Markdown,
        TinyMCE,
    },
    data() {
        return {
            engine: import.meta.env['VITE_EDITOR_ENGINE']
        }
    },
    methods: {
        getValue() { this.$refs[this.id].value(); },
        value(v:any) { this.$refs[this.id].value(v); }
    },
    emits: ['update:modelValue'],
});

</script>

<template>
    <TinyMCE v-if="engine === 'TinyMCE'" :ref="id" :model-value="modelValue" @update:model-value="this.$emit('update:modelValue', $event);"></TinyMCE>
    <Markdown v-else-if="engine === 'Markdown'" :model-value="modelValue" @update:model-value="this.$emit('update:modelValue', $event)"></Markdown>
    <Quill v-else :ref="id" :model-value="modelValue" @update:model-value="this.$emit('update:modelValue', $event);"></Quill>
</template>