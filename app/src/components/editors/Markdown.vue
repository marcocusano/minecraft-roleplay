<script lang="ts">

import { MdEditor as Editor, type ToolbarNames } from 'md-editor-v3';
import 'md-editor-v3/lib/style.css';
import useThemeStore from '@/stores/theme';

export default {
    props: {
        modelValue: {
            type: String,
            required: false,
            default: ''
        }
    },
    components: {
        Editor
    },
    data() {
        return {
            stores: {
                theme: useThemeStore().theme
            },
            val: this.modelValue,
            options: this.defaultOptions()
        }
    },
    methods: {
        defaultOptions():ToolbarNames[] {
            return [
                'bold',
                'underline',
                'italic',
                '-',
                'strikeThrough',
                'title',
                'sub',
                'sup',
                'quote',
                'unorderedList',
                'orderedList',
                'task',
                '-',
                'codeRow',
                'code',
                'link',
                'table',
                'mermaid',
                'katex',
                '-',
                'revoke',
                'next',
                '=',
                'fullscreen',
                'preview',
            ];
        }
    },
    emits: ['update:modelValue'],
    watch: {
        modelValue(v) { this.val = v; }
    }
}


</script>

<template>
    <Editor :theme="stores.theme.dark ? 'dark' : 'light'" :toolbars="options" v-model="val" @update:model-value="this.$emit('update:modelValue', val)" language="en-US"></Editor>
</template>

<style>

.md-editor-dark,
.md-editor-modal-container[data-theme='dark'] {
    --md-color: var(--dark-text);
    --md-hover-color: var(--dark-borders-light);
    --md-bk-color: var(--dark-bg);
    --md-bk-color-outstand: var(--dark-borders-light);
    --md-bk-hover-color: var(--dark-borders-light);
    --md-border-color: var(--dark-borders);
    --md-border-hover-color: var(--dark-borders-light);
    --md-border-active-color: var(--dark-borders-light);
    --md-modal-mask: var(--dark-bg);
    --md-scrollbar-bg-color: var(--dark-borders);
    --md-scrollbar-thumb-color: var(--dark-borders);
    --md-scrollbar-thumb-hover-color: var(--dark-bg);
    --md-scrollbar-thumb-active-color: var(--dark-borders);
}

</style>