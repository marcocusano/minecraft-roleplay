<script lang="ts">

// Components
import Button from '@/components/buttons/DefaultButton.vue';
import Editor from '@/components/editors/DefaultEditor.vue';
import Flex from '@/components/layouts/Flex.vue';

// Export
export default {

    components: {
        Button,
        Editor,
        Flex
    },

    data() {
        
        return {
            refs: {
                editor: 'cv_editor'
            },
            formData: {
                editorValue: ''
            }
        }
    },

    methods: {

        save() {
            console.log(this.formData.editorValue);
        }

    }

}

</script>

<template>
    <Editor :ref="refs.editor" v-model="formData.editorValue"></Editor>
    <Flex><Button class="ml-auto mt-4" @click="save">Save changes</Button></Flex>
</template>