<script lang="ts">

import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';

export default {

    props: {
        id: {
            type: String,
            required: false,
            default: 'editor'
        },
        modelValue: {
            type: String,
            required: false,
            default: null
        },
    },

    components: {
        QuillEditor
    },

    data() {
        return {
            theme: this.getTheme(),
            val: this.modelValue
        }
    },

    methods: {
        /* Getters */
        getQuill() { return this.$refs[this.id].getQuill(); },
        getTheme(theme: '' | 'bubble' | 'snow' = 'snow') { return theme },
        getValue():string { return this.value; },
        
        /* Setters */
        updateContent(v:string) {
            this.val = v;
            this.$emit('update:modelValue', v);
        },

        /* Getters and Setters */
        value(v:any) {
            if (v) {
                this.value = v;
                return this;
            } else {
                return this.value;
            }
        }
    },

    emits: ['update:modelValue'],

    watch: {
        modelValue(v) { this.val = v; }
    }
}

</script>

<template>
    <QuillEditor :ref="id" :theme="theme" content-type="text" :value="val" v-model="val"  @update:content="updateContent" class="dark:bg-gray-800 dark:border-gray-700"></QuillEditor>
</template>